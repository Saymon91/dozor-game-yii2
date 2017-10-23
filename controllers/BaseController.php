<?php
/**
 * Created by PhpStorm.
 * User: semen
 * Date: 23.10.17
 * Time: 15:46
 */

namespace app\controllers;
use yii\web\Controller;
use yii\web\Response;

class BaseController extends Controller
{
    public function render($template, $args = [])
    {
        $template = trim($template);
        $ext = '.twig';
        $ext_length = strlen($ext);
        if (!substr($template, strlen($template) - $ext_length, $ext_length) !== $ext) {
            $template = "$template$ext";
        }
        return parent::render($template, $args);
    }
}