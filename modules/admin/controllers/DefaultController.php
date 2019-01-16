<?php  

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\components\User;
use yii\validators\EmailValidator;
use yii\validators\UrlValidator;
use yii\validators\ImageValidator;
use yii\validators\IpValidator;
use yii\validators\DateValidator;

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

        $image = '6811_1512137725.jpg';
        $validator = new ImageValidator();
        if ($validator->validate($image, $error)) {
            echo '有效的 Image 图片。<br>';
        } else {
            echo $error;
        }

        $date = '2013-09-13';
        $validator = new DateValidator();
        if ($validator->validate($date, $error)) {
            echo '有效的 Date 类型。<br>';
        } else {
            echo $error;
        }
    }
}