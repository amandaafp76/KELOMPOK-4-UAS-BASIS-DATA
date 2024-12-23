<?php

use app\models\Manda;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MandaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mandas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Manda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_manda',
            'nama_manda',
            'umur_manda',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Manda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_manda' => $model->id_manda]);
                 }
            ],
        ],
    ]); ?>


</div>
