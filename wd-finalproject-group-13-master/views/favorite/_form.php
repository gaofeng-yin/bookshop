<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Book;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Favorite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="favorite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>
        <div class="col-sm-6">
    <?= $form->field($model, 'user_id')->textInput() ?>
        </div>
        <div class="col-sm-6">
    <?php 
        //use app\models\Author;
        $books=Book::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($books,'id','title');

        echo $form->field($model, 'book_id')->dropDownList(
            $listData,
            ['prompt'=>'Select book']
            );
        ?>
        </div>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
