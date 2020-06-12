<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

$contr = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;
$skipContainer = $contr == 'site' && $action == 'index';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::$app->homeUrl.'images/logo.png', ['alt' => Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            [
                'label' => 'Back office Routes',
                'items' => [
                    ['label' => 'User', 'url' => ['/user']],
                    ['label' => 'Book', 'url' => ['/book/index']],
                    ['label' => 'author', 'url' => ['/author/index']],
                    ['label' => 'publisher', 'url' => ['/publisher/index']],
                    ['label' => 'favorite', 'url' => ['/favorite/index']],
                    ['label' => 'genre', 'url' => ['/genre/index']],
                    ['label' => 'order', 'url' => ['/order/index']],
                    ['label' => 'review', 'url' => ['/review/index']],
                    ['label' => 'typebook', 'url' => ['/type-book/index']],
                ],
                'visible' => Yii::$app->user->can('admin')
            ],
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Books', 'url' => ['/book/books']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'FAQ', 'url' => ['/site/faq']],
            '<li class="nav-item separator"></li>',
            ['label' => 'Sign Up', 'url' => ['/user/register'], 'linkOptions' => ['style' => 'color: #A4A6AB; font-weight: bold;']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/user/login'], 'linkOptions' => ['style' => 'color: #A4A6AB; font-weight: bold;']] : // or ['/user/login-email']
                ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                    'url' => ['/user/logout'],
                    'linkOptions' => ['data-method' => 'post', 'style' => 'color: #A4A6AB; font-weight: bold;']],
        ],
    ]);
    NavBar::end();
    ?>
    <?php if ($skipContainer): ?>
        <div class="">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    <?php else: ?>
        <div class="container pt-3">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    <?php endif; ?>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <p class="m-0 text-white">Copyright &copy; BookShop Website 2019</p>
                <a href="#" class="fab fa-facebook text-white"></a>
                <a href="#" class="fab fa-twitter text-white"></a>
                <a href="#" class="fab fa-instagram text-white"></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


