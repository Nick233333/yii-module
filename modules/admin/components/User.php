<?php

namespace app\modules\admin\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class User extends Component
{
  
    public function index()
    {
        echo '<br/>User Component->'.Yii::$app->controller->module->params['name'];
    }
 
}