<?php

use app\models\Siswa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SiswaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Siswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_siswa',
            'NIS',
            'Jenis_kelamin',
            'Nama_siswa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Siswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_siswa' => $model->ID_siswa]);
                 }
            ],
        ],
    ]); ?>


</div>
