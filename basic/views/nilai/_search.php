<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\NilaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="nilai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_nilai') ?>

    <?= $form->field($model, 'ID_siswa') ?>

    <?= $form->field($model, 'ID_guru') ?>

    <?= $form->field($model, 'Mata_pelajaran') ?>

    <?= $form->field($model, 'Nilai_mata_pelajaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
