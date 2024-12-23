<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Guru $model */

$this->title = 'Update Guru: ' . $model->ID_guru;
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_guru, 'url' => ['view', 'ID_guru' => $model->ID_guru]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
