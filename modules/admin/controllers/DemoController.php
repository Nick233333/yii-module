<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DemoController extends Controller
{

    public function actions()
    {
        return [
            'test-info' => [
                'class' => 'app\actions\TestAction',
                'param1' => 'hello',
                'param2' => 'world',
                'param3' => '!!!',
            ],
            'user' => [
                'class' => 'app\actions\TestAction',
                'param1' => 'hello',
                'param2' => 'world',
                'param3' => '!!!',
            ],
        ];
    }

    public function actionTestInfo()
    {
        echo 'test-info';
    }

    public function actionUser()
    {
        echo 'user';
    }
}
