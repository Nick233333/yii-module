<?php  

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return 'admin default index';
    }

    public function actionDemo()
    {
        $module = Yii::$app->controller->module;
        $module->Test->index();
    }
}