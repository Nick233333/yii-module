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
        // $module_param_water = Yii::$app->controller->module->params['water'];
        // echo $module_param_water;
        echo $this->terry;
        echo Yii::$app->controller->module->params['terry'];
        echo Yii::$app->controller->module->params['path'];
    }
 
}