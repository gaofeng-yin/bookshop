<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Author;
use app\models\Genre;
use app\models\Publisher;
use app\models\TypeBook;
/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'publishing_year',
            'edition',
            'price',
            'isbn',
            'stock',
            'sold',
            [
                'attribute' => 'cover',
                'value' => '../uploads/book/'.$model->cover,
                'format' => ['image',['width'=>'300','height'=>'100']],
            ],
            'pages',
            'created_at',
            'updated_at',
            /*[   'attribute'=>'genre_id',
                'value' => function ($data) {
                return Genre::findOne(['id'=>$data->genre_id])->name;
                },
            ],
            [   'attribute'=>'publisher_id',
                'value' => function ($data) {
                return Publisher::findOne(['id'=>$data->publisher_id])->name;
                },
            ],
            [   'attribute'=>'type_book_id',
                'value' => function ($data) {
                return TypeBook::findOne(['id'=>$data->type_book_id])->name;
                },
            ],
            [   'attribute'=>'author_id',
                'value' => function ($data) {
                return Author::findOne(['id'=>$data->author_id])->name;
                },
            ],*/
        ],
    ]) ?>
    <?= Html::a('Create more', ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a( 'Back', Yii::$app->request->referrer, ['class' => 'btn btn-primary']); ?>

</div>
