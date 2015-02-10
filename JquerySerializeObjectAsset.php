<?php
namespace mgcode\jserialize;

use yii\web\AssetBundle;

class JquerySerializeObjectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/jquery-serialize-object/dist';
    public $js = [
        'jquery.serialize-object.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}