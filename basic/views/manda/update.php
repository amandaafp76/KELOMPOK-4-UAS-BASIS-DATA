<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Manda $model */

$this->title = 'Update Manda: ' . $model->id_manda;
$this->params['breadcrumbs'][] = ['label' => 'Mandas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_manda, 'url' => ['view', 'id_manda' => $model->id_manda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
