<?php  

namespace app\modules\admin;

use Yii;

class AdminModule extends \yii\base\Module
{
    public function init()
    {
        parent::init();//必须调用
        Yii::configure($this, ['params'=> ['path' => '/test', 'terry' => '111']]);
    }
}