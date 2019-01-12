<?php

namespace app\modules\admin\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class Test extends Component
{
  
    public $terry;

    public function index()
    {
        echo '<br/>Test Component->'.$this->terry;
        echo '<br/>Test Component->'.Yii::$app->controller->module->params['name'];
    }
 
}