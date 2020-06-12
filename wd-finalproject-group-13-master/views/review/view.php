<?php

use yii\widgets\DetailView;
use app\models\Book;
/* @var $this yii\web\View */
/* @var $model app\models\Review */
?>
<div class="review-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user_id',
            [   'attribute'=>'book_id',
                'value' => function ($data) {
                return Book::findOne(['id'=>$data->book_id])->title;
                },
            ],
            'rating',
            'comment',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
