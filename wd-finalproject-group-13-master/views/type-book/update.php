<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeBook */

$this->title = 'Update Type Book: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Type Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
