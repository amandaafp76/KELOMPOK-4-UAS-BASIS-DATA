<?php

namespace app\controllers;

use app\models\Nilai;
use app\models\NilaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NilaiController implements the CRUD actions for Nilai model.
 */
class NilaiController extends Controller
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
     * Lists all Nilai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NilaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nilai model.
     * @param int $ID_nilai Id Nilai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_nilai)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_nilai),
        ]);
    }

    /**
     * Creates a new Nilai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Nilai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_nilai' => $model->ID_nilai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Nilai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_nilai Id Nilai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_nilai)
    {
        $model = $this->findModel($ID_nilai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_nilai' => $model->ID_nilai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Nilai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_nilai Id Nilai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_nilai)
    {
        $this->findModel($ID_nilai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Nilai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_nilai Id Nilai
     * @return Nilai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_nilai)
    {
        if (($model = Nilai::findOne(['ID_nilai' => $ID_nilai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
