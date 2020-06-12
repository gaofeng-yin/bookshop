<?php

use app\models\Book;
use \app\models\Genre;
use yii\data\ActiveDataProvider;
use yii\bootstrap4\Html;
use yii\widgets\ListView;

$genres = Genre::getGenero();


$dpBooks = new ActiveDataProvider([
    'query' => Book::find()->filterWhere(['genre_id'=>$genre_id]),
    'pagination' => [
            'pageSize' => 4,
    ],
]);

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;

//print_r($dpBooks);
?>
<div class="site-boos">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-3">

            <!--<h3 class="h3-responsive font-weight-bold blue-text mx-3">Genres</h3>-->
            <div class="list-group">
                <?php foreach ($genres as $genre) {
                    echo Html::beginTag('li', ['class' => 'list-group-item']);
                    {
                        echo Html::a($genre['name'].'</br>', ['/book/books', 'genre_id'=>$genre['id']]);
                    }
                    echo Html::endTag('li');
                }?>
            </div>
        </div>
        <div class="col-lg-9">

                <?php
                echo ListView::widget([
                    'dataProvider' => $dpBooks,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'row',
                        'id' => ''
                    ],
                    'layout' => "{items}\n{pager}",
                    'itemView' => '_book',
                    'itemOptions' => [
                        'tag' => false,
                    ],
                    'pager' => [
                        'firstPageLabel' => 'First',
                        'nextPageLabel' => 'Next',
                        'lastPageLabel' => false,
                        'maxButtonCount' => 4,
                        'options' => [
                            'class' => 'pagination justify-content-center font-weight-bold'
                        ],
                    ],
                ]);

                ?>
            </div>
        </div>
</div>
