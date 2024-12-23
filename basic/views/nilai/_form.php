<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Nilai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nilai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_nilai')->textInput() ?>

    <?= $form->field($model, 'ID_siswa')->textInput() ?>

    <?= $form->field($model, 'ID_guru')->textInput() ?>

    <?= $form->field($model, 'Mata_pelajaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nilai_mata_pelajaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
