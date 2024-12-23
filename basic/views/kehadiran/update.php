<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kehadiran $model */

$this->title = 'Update Kehadiran: ' . $model->ID_kehadiran;
$this->params['breadcrumbs'][] = ['label' => 'Kehadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_kehadiran, 'url' => ['view', 'ID_kehadiran' => $model->ID_kehadiran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kehadiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
