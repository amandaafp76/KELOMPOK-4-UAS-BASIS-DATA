<?php

namespace app\controllers;

use app\models\Guru;
use app\models\GuruSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GuruController implements the CRUD actions for Guru model.
 */
class GuruController extends Controller
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
     * Lists all Guru models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guru model.
     * @param int $ID_guru Id Guru
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_guru)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_guru),
        ]);
    }

    /**
     * Creates a new Guru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Guru();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_guru' => $model->ID_guru]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Guru model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_guru Id Guru
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_guru)
    {
        $model = $this->findModel($ID_guru);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_guru' => $model->ID_guru]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Guru model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_guru Id Guru
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_guru)
    {
        $this->findModel($ID_guru)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Guru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_guru Id Guru
     * @return Guru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_guru)
    {
        if (($model = Guru::findOne(['ID_guru' => $ID_guru])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
