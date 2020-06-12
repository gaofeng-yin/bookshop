<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Author */
?>
<div class="author-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'about:ntext',
            [
                'attribute' => 'photo',
                'value' => '../uploads/author/'.$model->photo,
                'format' => ['image',['width'=>'300','height'=>'100']],
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
