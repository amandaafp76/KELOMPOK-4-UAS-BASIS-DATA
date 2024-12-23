<?php

namespace app\controllers;

use app\models\Kelas;
use app\models\KelasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KelasController implements the CRUD actions for Kelas model.
 */
class KelasController extends Controller
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
     * Lists all Kelas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KelasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kelas model.
     * @param int $ID_kelas Id Kelas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_kelas)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_kelas),
        ]);
    }

    /**
     * Creates a new Kelas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kelas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_kelas' => $model->ID_kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kelas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_kelas Id Kelas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_kelas)
    {
        $model = $this->findModel($ID_kelas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_kelas' => $model->ID_kelas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kelas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_kelas Id Kelas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_kelas)
    {
        $this->findModel($ID_kelas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kelas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_kelas Id Kelas
     * @return Kelas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_kelas)
    {
        if (($model = Kelas::findOne(['ID_kelas' => $ID_kelas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
