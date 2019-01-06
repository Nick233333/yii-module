<?php 

namespace app\controllers;

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
}