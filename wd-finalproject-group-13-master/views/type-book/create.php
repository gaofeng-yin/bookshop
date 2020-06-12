<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeBook */

$this->title = 'Create Type Book';
$this->params['breadcrumbs'][] = ['label' => 'Type Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
