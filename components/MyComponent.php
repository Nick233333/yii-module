<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class MyComponent extends Component
{
  
    public $terry;

    public function welcome()
    {
        echo $this->terry."Hello..Welcome to MyComponent";
    }
 
}