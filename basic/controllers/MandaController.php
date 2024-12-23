<?php

namespace app\controllers;

use app\models\Manda;
use app\models\MandaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MandaController implements the CRUD actions for Manda model.
 */
class MandaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Manda models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MandaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Manda model.
     * @param int $id_manda Id Manda
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_manda)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_manda),
        ]);
    }

    /**
     * Creates a new Manda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Manda();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_manda' => $model->id_manda]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Manda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_manda Id Manda
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_manda)
    {
        $model = $this->findModel($id_manda);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_manda' => $model->id_manda]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Manda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_manda Id Manda
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_manda)
    {
        $this->findModel($id_manda)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Manda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_manda Id Manda
     * @return Manda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_manda)
    {
        if (($model = Manda::findOne(['id_manda' => $id_manda])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
