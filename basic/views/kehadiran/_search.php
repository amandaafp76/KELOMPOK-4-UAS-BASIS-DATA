<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KehadiranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kehadiran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_kehadiran') ?>

    <?= $form->field($model, 'ID_siswa') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'Status_kehadiran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
