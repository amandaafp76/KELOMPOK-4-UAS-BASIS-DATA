<?php

namespace app\controllers;

use app\models\Mapel;
use app\models\MapelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MapelController implements the CRUD actions for Mapel model.
 */
class MapelController extends Controller
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
     * Lists all Mapel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MapelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mapel model.
     * @param int $ID_mata_pelajaran Id Mata Pelajaran
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_mata_pelajaran)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_mata_pelajaran),
        ]);
    }

    /**
     * Creates a new Mapel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Mapel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_mata_pelajaran' => $model->ID_mata_pelajaran]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mapel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_mata_pelajaran Id Mata Pelajaran
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_mata_pelajaran)
    {
        $model = $this->findModel($ID_mata_pelajaran);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_mata_pelajaran' => $model->ID_mata_pelajaran]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mapel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_mata_pelajaran Id Mata Pelajaran
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_mata_pelajaran)
    {
        $this->findModel($ID_mata_pelajaran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mapel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_mata_pelajaran Id Mata Pelajaran
     * @return Mapel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_mata_pelajaran)
    {
        if (($model = Mapel::findOne(['ID_mata_pelajaran' => $ID_mata_pelajaran])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
