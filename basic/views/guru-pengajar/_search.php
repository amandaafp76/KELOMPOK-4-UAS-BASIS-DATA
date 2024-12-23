<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GuruPengajarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guru-pengajar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_guru') ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'Nama_guru') ?>

    <?= $form->field($model, 'Jenis_kelamin') ?>

    <?= $form->field($model, 'Alamat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
