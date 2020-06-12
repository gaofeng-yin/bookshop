<?php
use yii\bootstrap4;
use yii\helpers\Url;
?>

<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
        <a href="<?=Url::to(['/book/book', 'id'=>$model->id])?>"><img class="card-img-top books" src="<?=Yii::$app->homeUrl.'uploads/book/'.$model->cover?>" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="<?=Url::to(['/book/book', 'id'=>$model->id])?>"><?=$model->title?></a>
            </h4>
            <h5><?=$model->price?>€</h5>
        </div>
    </div>
</div>