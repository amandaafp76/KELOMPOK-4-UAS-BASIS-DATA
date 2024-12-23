<?php

use app\models\Kehadiran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KehadiranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kehadirans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kehadiran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kehadiran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_kehadiran',
            'ID_siswa',
            'Tanggal',
            'Status_kehadiran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kehadiran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_kehadiran' => $model->ID_kehadiran]);
                 }
            ],
        ],
    ]); ?>


</div>
