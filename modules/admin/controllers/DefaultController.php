<?php  

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\components\User;
use yii\validators\EmailValidator;
use yii\validators\UrlValidator;
use yii\validators\IpValidator;

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

    public function actionValidatorsList()
    {
        $email = 'nick_php@163.com';
        $validator = new EmailValidator();
        if ($validator->validate($email, $error)) {
            echo '有效的 Email 地址。<br>';
        } else {
            echo $error;
        }


        $url = 'https://wp.hellocode.name/?name=nick';
        $validator = new UrlValidator();
        if ($validator->validate($url, $error)) {
            echo '有效的 URL 地址。<br>';
        } else {
            echo $error;
        }

        $ip = '127.0.0.1';
        $validator = new IpValidator();
        if ($validator->validate($ip, $error)) {
            echo '有效的 IP 地址。<br>';
        } else {
            echo $error;
        }

    }
}