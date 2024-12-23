<?php

namespace app\controllers;

use app\models\Kehadiran;
use app\models\KehadiranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KehadiranController implements the CRUD actions for Kehadiran model.
 */
class KehadiranController extends Controller
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
     * Lists all Kehadiran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KehadiranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kehadiran model.
     * @param int $ID_kehadiran Id Kehadiran
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_kehadiran)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_kehadiran),
        ]);
    }

    /**
     * Creates a new Kehadiran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kehadiran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_kehadiran' => $model->ID_kehadiran]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kehadiran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_kehadiran Id Kehadiran
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_kehadiran)
    {
        $model = $this->findModel($ID_kehadiran);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_kehadiran' => $model->ID_kehadiran]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kehadiran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_kehadiran Id Kehadiran
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_kehadiran)
    {
        $this->findModel($ID_kehadiran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kehadiran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_kehadiran Id Kehadiran
     * @return Kehadiran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_kehadiran)
    {
        if (($model = Kehadiran::findOne(['ID_kehadiran' => $ID_kehadiran])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
