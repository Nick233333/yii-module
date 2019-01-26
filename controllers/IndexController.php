<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return 'index->index';
    }

    public function actionDefault()
    {
        return 'default';
    }

    public function actionDemo()
    {
        Yii::$app->mycomponent->welcome();
    }
}
