<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Author;
use app\models\Genre;
use app\models\Publisher;
use app\models\TypeBook;
/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-sm-4">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
    <?= '<label class="control-label">publishing year</label>';
    echo DatePicker::widget([
        'name' => 'publishing_year',
        'model' => $model, 
        'attribute' => 'publishing_year',
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'value' => '1996-07-13',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
            ]); 
        ?>
         </div>
    <?php // $form->field($model, 'publishing_year')->textInput() ?>
         <div class="col-sm-4">
    <?= $form->field($model, 'edition')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
    <?= $form->field($model, 'stock')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
    <?= $form->field($model, 'sold')->textInput() ?>
        </div>
        <div class="col-sm-4">
    <?= $form->field($model, 'pages')->textInput(['maxlength' => true]) ?>
        </div>
    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>
        <div class="col-sm-4">
    <?php 
        //use app\models\Genre;
        $genres=Genre::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($genres,'id','name');

        echo $form->field($model, 'genre_id')->dropDownList($listData,['prompt'=>'Select genre']);
        ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
    <?php 
        //use app\models\Author;
        $publishers=Publisher::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($publishers,'id','name');

        echo $form->field($model, 'publisher_id')->dropDownList(
            $listData,
            ['prompt'=>'Select publisher']
            );
        ?>
        </div>
        <div class="col-sm-4">
    <?php 
        //use app\models\Author;
        $typebooks=TypeBook::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($typebooks,'id','name');

        echo $form->field($model, 'type_book_id')->dropDownList(
            $listData,
            ['prompt'=>'Select type book']
            );
        ?>
        </div>
        <div class="col-sm-4">
    <?php 
        //use app\models\Author;
        $authors=Author::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($authors,'id','name');

        echo $form->field($model, 'author_id')->dropDownList(
            $listData,
            ['prompt'=>'Select Author']
            );
        ?>
        </div>
    </div>
    <?php echo $form->field($model, 'cover')->fileInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        <?= Html::a( 'Back', Yii::$app->request->referrer, ['class' => 'btn btn-primary']); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
