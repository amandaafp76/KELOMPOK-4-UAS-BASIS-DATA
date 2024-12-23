<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Manda $model */

$this->title = $model->id_manda;
$this->params['breadcrumbs'][] = ['label' => 'Mandas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="manda-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_manda' => $model->id_manda], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_manda' => $model->id_manda], [
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
            'id_manda',
            'nama_manda',
            'umur_manda',
        ],
    ]) ?>

</div>
