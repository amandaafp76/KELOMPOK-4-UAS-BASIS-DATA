<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Manda $model */

$this->title = 'Create Manda';
$this->params['breadcrumbs'][] = ['label' => 'Mandas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
