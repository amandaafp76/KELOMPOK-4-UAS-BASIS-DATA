<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mapel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mapel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_mata_pelajaran')->textInput() ?>

    <?= $form->field($model, 'ID_guru')->textInput() ?>

    <?= $form->field($model, 'Mata_pelajaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
