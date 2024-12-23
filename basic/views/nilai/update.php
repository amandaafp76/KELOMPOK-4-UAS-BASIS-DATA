<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Nilai $model */

$this->title = 'Update Nilai: ' . $model->ID_nilai;
$this->params['breadcrumbs'][] = ['label' => 'Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_nilai, 'url' => ['view', 'ID_nilai' => $model->ID_nilai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
