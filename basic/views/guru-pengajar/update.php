<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GuruPengajar $model */

$this->title = 'Update Guru Pengajar: ' . $model->ID_guru;
$this->params['breadcrumbs'][] = ['label' => 'Guru Pengajars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_guru, 'url' => ['view', 'ID_guru' => $model->ID_guru]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-pengajar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
