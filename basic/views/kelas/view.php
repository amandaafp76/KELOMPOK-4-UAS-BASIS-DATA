<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kelas $model */

$this->title = $model->ID_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_kelas' => $model->ID_kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_kelas' => $model->ID_kelas], [
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
            'ID_kelas',
            'ID_guru',
            'ID_siswa',
            'Nama_kelas',
        ],
    ]) ?>

</div>
