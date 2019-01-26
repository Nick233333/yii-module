<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

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

    public function behaviors()
    {
        // Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return ArrayHelper::merge([
            [
                'class' => Cors::className(),
            ],
        ], parent::behaviors());
    }

    public function actionApiJson()
    {
        return ['code' => 200, 'message' => 'ok', 'data' => []];
    }

    public function actionAliasList()
    {
        // 预定义
        echo Yii::getAlias('@yii');
        echo Yii::getAlias('@app');
        echo Yii::getAlias('@runtime');
        echo Yii::getAlias('@webroot');
        echo Yii::getAlias('@web');
        echo Yii::getAlias('@vendor');
        echo Yii::getAlias('@bower');
        echo Yii::getAlias('@npm');
        // 自定义
        echo Yii::getAlias('@domain');

        Yii::setAlias('@upload', Yii::getAlias('@app').'/web/upload/');
        echo Yii::getAlias('@upload');
    }

    public function actionUrlList()
    {
        echo Url::to();
        // echo Url::to(['']);
        // echo Url::to(['index']);
        // echo Url::to(['/index/index']);
        // echo Url::to(['/admin/index/index']);
        // echo Url::to(['/admin/index/index', 'id' => 100]);
        // echo Url::to(['index', 'id' => 100, 'name' => 'nick','#' => 'content'],true);
        // echo Url::to(['index', 'id' => 100, 'name' => 'nick','#' => 'content'],'https');
        // echo Url::to('/images/logo.gif', true);
        // echo Url::home();
        // echo Url::base();
        // echo Url::canonical();//当前请求完整url
        // Url::remember();//记住当前请求url，不带域名
        // echo Url::previous();//上一次请求的url

    }

    public function actionLog()
    {

        Yii::trace('trace trace trace trace trace', __METHOD__);
        Yii::info('info info info info info', __METHOD__);
        Yii::warning('warning warning warning warning warning', __METHOD__);
        Yii::error('error error error error', __METHOD__);




    }
}


