yii2-fakeLoader
===============
yii2-fakeLoader

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hoter/yii2-fakeloader:dev-master
```

or add

```
"hoter/yii2-fakeloader": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
    \hoter\fakeloader\FakeloaderAsset::register($this);
    $fakeLoaderStr = <<<EOF
         $("#fakeloader").fakeLoader({
            timeToHide:1200, //Time in milliseconds for fakeLoader disappear
            zIndex:9999, // Default zIndex
            spinner:"spinner4",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
            bgColor:"#2ecc71", //Hex, RGB or RGBA colors
            //imagePath:"yourPath/customizedImage.gif" //If you want can you insert your custom image
        });
    EOF;
    $this->registerJs($fakeLoaderStr);

```