<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

        // Flaticon Font
        'lib/flaticon/font/flaticon.css',

        // Libraries Stylesheet
        'lib/owlcarousel/assets/owl.carousel.min.css',
        'lib/lightbox/css/lightbox.min.css',

        // Customized Bootstrap Stylesheet
        'css/style.css',
        'css/main.css'
    ];
    public $js = [
        // JavaScript Libraries
        //'https://code.jquery.com/jquery-3.4.1.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
        'lib/easing/easing.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'lib/isotope/isotope.pkgd.min.js',
        'lib/lightbox/js/lightbox.min.js',

        // Contact Javascript File
        'mail/jqBootstrapValidation.min.js',
        'mail/contact.js',

        // Template Javascript
        'js/main.js',
        'js/news.js',
        'js/cancel.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
