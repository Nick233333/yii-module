<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;

class IndexController extends Controller
{
    public $defaultAction = 'home';
    public $enableCsrfValidation = false;

    // public function actionHome()
    // {
    //     echo __METHOD__;
    //     echo '<br>';
    // }
    //
    // public function init()
    // {
    //     echo __METHOD__;
    //     echo '<br>';
    // }
    //
    // public function actionIndex()
    // {
    //     echo __METHOD__;
    //     echo '<br>';
    // }
    //
    // public function beforeAction($action)
    // {
    //     echo __METHOD__;
    //     echo '<br>';
    //     return true;
    // }
    //
    // public function afterAction($action, $result)
    // {
    //     echo __METHOD__;
    //     echo '<br>';
    //     return true;
    // }

    public function actionTest()
    {
        return Yii::$app->request->post('name', '111');
    }
}


