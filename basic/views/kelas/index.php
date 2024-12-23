<?php

use app\models\Kelas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KelasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_kelas',
            'ID_guru',
            'ID_siswa',
            'Nama_kelas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kelas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_kelas' => $model->ID_kelas]);
                 }
            ],
        ],
    ]); ?>


</div>
