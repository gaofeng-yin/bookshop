<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TypeBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Type Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Type Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

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
                    $url = $baseurl.'/type-book/view?id='.$model->id;
                 return $url;
                                         }
            }],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
