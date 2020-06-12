<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Book;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Review */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-5">
    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true])  ?>
    </div>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>

    <div class="col-sm-5">
        <?= $form->field($model, 'rating')->textInput() ?>
    </div>

    <div class="col-sm-5">
        <?php
        //use app\models\Genre;
        $books=Book::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($books,'id','title');

        echo $form->field($model, 'book_id')->dropDownList($listData,['prompt'=>'Select book']);
        ?>
    </div>


    <div class="col-sm-5">
        <?= $form->field($model, 'comment')->textarea(['rows' => 6])?>
    </div>
  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
