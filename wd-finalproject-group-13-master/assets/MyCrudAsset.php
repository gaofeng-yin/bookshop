<?php


namespace app\assets;

use johnitvn\ajaxcrud\CrudAsset;

class MyCrudAsset extends CrudAsset
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
    ];

}
