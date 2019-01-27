<?php

namespace app\actions;

use yii\base\Action;

class TestAction extends Action
{
    public $param1 = null;
    public $param2 = null;
    public $param3 = null;

    public function run()
    {
        echo "test run param1: {$this->param1} param2: {$this->param2} param3: {$this->param3}";
    }

    public function beforeRun()
    {
        echo 'beforeRun';
        return true;
    }

    public function afterRun()
    {
        echo 'afterRun';
    }
}
