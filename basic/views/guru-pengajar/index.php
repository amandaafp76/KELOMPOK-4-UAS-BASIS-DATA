<?php

use app\models\GuruPengajar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\GuruPengajarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Guru Pengajars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-pengajar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Guru Pengajar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_guru',
            'NIP',
            'Nama_guru',
            'Jenis_kelamin',
            'Alamat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, GuruPengajar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_guru' => $model->ID_guru]);
                 }
            ],
        ],
    ]); ?>


</div>
