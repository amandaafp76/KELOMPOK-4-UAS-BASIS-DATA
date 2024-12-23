<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Manda $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="manda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_manda')->textInput() ?>

    <?= $form->field($model, 'nama_manda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur_manda')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
