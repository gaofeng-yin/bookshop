<?php

use yii\bootstrap4\Html;
use app\models\Author;
use yii\data\ActiveDataProvider;

$query = Author::find()->where(['id'=>$model->author_id]);
$dataProvider = new ActiveDataProvider(['query'=>$query]);

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="mt-4 mb-3"><?= Html::encode($this->title) ?></h1>

<div class="row">
    <div class="card mt-1 hoverable" style="margin: 0px 15px">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h2 class=" h2-responsive text-center text-md-right product-name font-weight-bold blue-text mb-1 ml-xl-0 ml-4">
                    <strong><?= $model->title?></strong>
                </h2>
                <!--<span class="badge badge-danger text-right product mb-4">bestseller</span>-->
                <h3 class="h3-responsive text-center text-md-right ml-xl-0 ml-4">
                        <span class="dark-grey-text font-weight-bold">
                          <strong><?= $model->price; ?>€</strong>
                        </span>
                    <!--<span class="grey-text">
                      <small>
                        <s>$89</s>
                      </small>
                    </span>-->
                </h3>
                <ul class="rating text-right mb-0">
                    <li>
                        <i class="fas fa-star blue-text"></i>
                    </li>
                    <li>
                        <i class="fas fa-star blue-text"></i>
                    </li>
                    <li>
                        <i class="fas fa-star blue-text"></i>
                    </li>
                    <li>
                        <i class="fas fa-star blue-text"></i>
                    </li>
                    <li>
                        <i class="fas fa-star blue-text"></i>
                    </li>
                </ul>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne1">
                            <!--<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">-->
                            <h5 class="mb-0" style="color: #2196f3!important; font-weight: 400!important;">
                                Description
                                <!--<i class="fas fa-angle-down rotate-icon"></i>-->
                            </h5>
                            <!--</a>-->
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <!--<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">-->
                            <h5 class="mb-0" style="color: #2196f3!important; font-weight: 400!important;">
                                Author<br>
                                <?= $model->author->name?>
                                <!--<i class="fas fa-angle-down rotate-icon"></i>-->
                            </h5>
                            <!--</a>-->
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse show" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                            <div class="card-body">
                                <?= $model->author->about?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mr-3 text-center text-md-right">
                <img class="card-img-top" src="<?= Yii::$app->homeUrl.'uploads/book/'.$model->cover; ?>" alt="" style="max-width: 370px; max-height: 508.75px;">
            </div>
        </div>
        <p></p>
    </div>
</div>
