<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Author;
use yii\helpers\Url;
use app\models\Genre;
use app\models\Publisher;
use app\models\TypeBook;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'publishing_year',
            'edition',
            'price',
            //'isbn',
            //'stock',
            //'sold',
            //'cover',
            //'pages',
            //'created_at',
            //'updated_at',
            /*[
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'attribute'=>'genre_id',
            'value' => function ($data) {
                return Genre::findOne(['id'=>$data->genre_id])->name;
                },
            ],
            [
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'attribute' => 'publisher_id',
            'value' => function ($data) {
                return Publisher::findOne(['id'=>$data->publisher_id])->name;
            },
            ],
            [ 
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'attribute'=>'type_book_id',
            'value' => function ($data) {
                return TypeBook::findOne(['id'=>$data->type_book_id])->name;
                },
            ],*/
            [  
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'attribute'=>'author_id',
            'value' => function ($data) {
                return Author::findOne(['id'=>$data->author_id])->name;
                },
            ],

            ['class' => 'yii\grid\ActionColumn',

            'header'=>'Action',

            'template' => '{view}',
            
            'buttons' => [

            //view button
            'view' => function ($url, $model) {
                return Html::a('<span class="fa fa-search"></span>View', $url, [
                            'title' => Yii::t('app', 'View'),
                            'class'=>'btn btn-primary btn-xs',                                  
                                                                                ]);
                                                },
                            ],

            'urlCreator' => function ($action, $model, $key, $index) {
                  if ($action === 'view') {
                    $baseurl = Url::base();
                    $url = $baseurl.'/book/view?id='.$model->id;
                 return $url;
                                         }
            }],
        ],
    ]); ?>

</div>
