<?php

namespace app\modules\admin;

use Yii;

class AdminModule extends \yii\base\Module
{
    public function init()
    {
        parent::init();//必须调用
        $this->params = ['name' => 'name'];

        Yii::configure($this, require __DIR__ . '/config/config.php');
        $this->components = [
            'mycomponent' => [
                'class' => 'app\components\MyComponent',
                'terry' => 'xxxx',
            ],
        ];
    }
}
