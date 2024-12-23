<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Guru $model */

$this->title = $model->ID_guru;
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guru-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_guru' => $model->ID_guru], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_guru' => $model->ID_guru], [
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
            'ID_guru',
            'NIP',
            'Nama_guru',
            'Jenis_kelamin',
            'Alamat',
        ],
    ]) ?>

</div>
