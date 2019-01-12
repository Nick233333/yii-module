<?php  

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\components\User;

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
        $user = new User();
        $user->index();
    }
}