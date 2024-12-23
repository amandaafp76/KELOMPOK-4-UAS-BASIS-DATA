<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Siswa $model */

$this->title = 'Update Siswa: ' . $model->ID_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_siswa, 'url' => ['view', 'ID_siswa' => $model->ID_siswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
