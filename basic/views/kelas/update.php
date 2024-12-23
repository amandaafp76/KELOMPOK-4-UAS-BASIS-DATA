<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kelas $model */

$this->title = 'Update Kelas: ' . $model->ID_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_kelas, 'url' => ['view', 'ID_kelas' => $model->ID_kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
