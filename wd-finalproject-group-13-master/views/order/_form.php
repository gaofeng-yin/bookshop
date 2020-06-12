<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>
    	<div class="col-sm-5">
    <?= $form->field($model, 'total_price')->textInput(['maxlength' => true]) ?>
    	</div>
    <?php // echo $form->field($model, 'created_at')->textInput() ?>
    	<div class="col-sm-5">
    <?= $form->field($model, 'user_id')->textInput() ?>
    	</div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        <?= Html::a( 'Back', Yii::$app->request->referrer, ['class' => 'btn btn-primary']); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
