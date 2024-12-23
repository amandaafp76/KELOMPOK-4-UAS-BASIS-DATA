<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Kehadiran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kehadiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_kehadiran')->textInput() ?>

    <?= $form->field($model, 'ID_siswa')->textInput() ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'Status_kehadiran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
