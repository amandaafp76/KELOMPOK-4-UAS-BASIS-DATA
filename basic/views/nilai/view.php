<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Nilai $model */

$this->title = $model->ID_nilai;
$this->params['breadcrumbs'][] = ['label' => 'Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nilai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_nilai' => $model->ID_nilai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_nilai' => $model->ID_nilai], [
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
            'ID_nilai',
            'ID_siswa',
            'ID_guru',
            'Mata_pelajaran',
            'Nilai_mata_pelajaran',
        ],
    ]) ?>

</div>
