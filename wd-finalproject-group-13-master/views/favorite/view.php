<?php

use yii\widgets\DetailView;
use app\models\Book;

/* @var $this yii\web\View */
/* @var $model app\models\Favorite */
?>
<div class="favorite-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [   'attribute'=>'book_id',
                'value' => function ($data) {
                return Book::findOne(['id'=>$data->book_id])->title;
                },
            ],
            'user_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
