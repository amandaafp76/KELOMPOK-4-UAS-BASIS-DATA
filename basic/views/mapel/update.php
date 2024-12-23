<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mapel $model */

$this->title = 'Update Mapel: ' . $model->ID_mata_pelajaran;
$this->params['breadcrumbs'][] = ['label' => 'Mapels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_mata_pelajaran, 'url' => ['view', 'ID_mata_pelajaran' => $model->ID_mata_pelajaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mapel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
