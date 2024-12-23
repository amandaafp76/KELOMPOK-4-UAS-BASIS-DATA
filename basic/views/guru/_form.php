<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Guru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_guru')->textInput() ?>

    <?= $form->field($model, 'NIP')->textInput() ?>

    <?= $form->field($model, 'Nama_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
