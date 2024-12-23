<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mapel $model */

$this->title = $model->ID_mata_pelajaran;
$this->params['breadcrumbs'][] = ['label' => 'Mapels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mapel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_mata_pelajaran' => $model->ID_mata_pelajaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_mata_pelajaran' => $model->ID_mata_pelajaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_mata_pelajaran',
            'ID_guru',
            'Mata_pelajaran',
        ],
    ]) ?>

</div>
