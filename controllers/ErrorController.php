<?php  

namespace app\controllers;

use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionError()
    {
        return '出错了';
    }

    public function actionOffline()
    {
        return 'offline';
    }
}