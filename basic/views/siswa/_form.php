<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Siswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_siswa')->textInput() ?>

    <?= $form->field($model, 'NIS')->textInput() ?>

    <?= $form->field($model, 'Jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_siswa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
