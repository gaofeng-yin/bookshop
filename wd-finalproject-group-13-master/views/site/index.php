<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Carousel;
use app\models\Genre;
use app\models\Book;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use yii\db\Expression;


$dpBooks = new ActiveDataProvider([
    'query' => Book::find()->filterWhere(['>','sold','40']),
    'pagination' => [
            'pageSize' => 4,
    ],
]);

$newbooks = new ActiveDataProvider([
    'query' => Book::find()->filterWhere(['>', 'publishing_year', new Expression('NOW()')]),
    'pagination' => [
            'pageSize' => 4,
    ],
]);

$this->title = 'Book Shop';
?>
<div class="site-index">
    <header>

        <?php
        echo Carousel::widget([
            'showIndicators' => false,
            'items' => [
                // the item contains only the image
                ['content' => '<div class="image-carousel" style="background-image: url(\'http://placehold.it/1900x1080\')"></div>'],
                ['content' => '<div class="image-carousel" style="background-image: url(\'http://placehold.it/1900x1080\')"></div>'],
                ['content' => '<div class="image-carousel" style="background-image: url(\'http://placehold.it/1900x1080\')"></div>'],

            ]
        ]); ?>
    </header>
    <!-- Page Content -->
    <div class="container">

        <!--<h1 class="my-4">Best Seller</h1>-->
        <div class="divider-new">
            <h3 class="h3-responsive font-weight-bold blue-text mx-3">Best Seller</h3>
        </div>
      <?php
                echo ListView::widget([
                    'dataProvider' => $dpBooks,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'row',
                        'id' => ''
                    ],
                    'layout' => "{items}\n",
                    'itemView' => 'bestSeller',
                    'itemOptions' => [
                        'tag' => false,
                    ],
                ]);

                ?>
        <!-- Marketing Icons Section -->
        <!--<div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">Card Title</h4>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">Card Title</h4>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">Card Title</h4>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>-->
        <!-- /.row -->

        <!-- Portfolio Section -->
        <!--<h1 class="my-4">Top Rating</h1>-->

        <!-- Features Section -->
        <!--<div class="row">
          <div class="col-lg-6">
            <h2>Modern Business Features</h2>
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
              <li>
                <strong>Bootstrap v4</strong>
              </li>
              <li>jQuery</li>
              <li>Font Awesome</li>
              <li>Working contact form with validation</li>
              <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid rounded" src="http://placehold.it/400x450" alt="">
          </div>
        </div>-->

        <!--<h1 class="my-4">New Books</h1>-->
        <div class="divider-new">
            <h3 class="h3-responsive font-weight-bold blue-text mx-3">Comming Soon</h3>
        </div>

       <?php
                echo ListView::widget([
                    'dataProvider' => $newbooks,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'row',
                        'id' => ''
                    ],
                    'layout' => "{items}\n",
                    'itemView' => 'bestSeller',
                    'itemOptions' => [
                        'tag' => false,
                    ],
                ]);

                ?>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <!--<div class="row mb-4">
          <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
          </div>
          <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
          </div>
        </div>-->

    </div>
    <!-- /.container -->

</div>
