<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Siswa $model */

$this->title = $model->ID_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="siswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_siswa' => $model->ID_siswa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_siswa' => $model->ID_siswa], [
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
            'ID_siswa',
            'NIS',
            'Jenis_kelamin',
            'Nama_siswa',
        ],
    ]) ?>

</div>
