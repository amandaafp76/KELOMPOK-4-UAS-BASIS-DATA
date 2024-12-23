<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kehadiran $model */

$this->title = $model->ID_kehadiran;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kehadiran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_kehadiran' => $model->ID_kehadiran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_kehadiran' => $model->ID_kehadiran], [
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
            'ID_kehadiran',
            'ID_siswa',
            'Tanggal',
            'Status_kehadiran',
        ],
    ]) ?>

</div>
