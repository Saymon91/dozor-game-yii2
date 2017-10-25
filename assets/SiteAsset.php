<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/variables.css',
        'css/fonts.css',
        'css/site.css',
        'css/site_header.css',
        'css/site_nav.css'
    ];
    public $js = [
    ];
}
