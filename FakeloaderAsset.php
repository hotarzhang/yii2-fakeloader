<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2015/12/16
 * Time: 11:03
 */

namespace hoter\fakeloader;


use yii\web\AssetBundle;

class FakeloaderAsset extends AssetBundle
{
    public $css = [
    'fakeLoader.css',
];

    public $js = [
        'fakeLoader.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
        $this->basePath = '@webroot/assets';
    }
}