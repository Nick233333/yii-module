<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',
    "timezone" => "Asia/Shanghai",
    'defaultRoute' => 'index/index',
    // 'catchAll' => ['error/offline'],
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@domain' => 'https://wp.hellocode.name'
    ],
    'modules' => [
        'admin'=>[
            'class'=>'app\modules\admin\AdminModule',
            // 'layout' => 'main',
            // 'params' => ['name' => 'nick'],
            // 'id' => 'admin',
            // 'defaultRoute' => "index/index",
            // 'version' => "1.0",
            // 'controllerNamespace' => '',
            // 'controllerMap' => [
            // ]
            'components'=>[
                'Test' => [
                    'class' => 'app\modules\admin\components\Test',
                    'terry' => 'test',
                ],
            ],
            'params' => [
                'name' => 'abc',
            ],
        ],
        'api'=>[
            'class'=>'app\modules\api\ApiModule',
        ],
        'jobs'=>[
            'class'=>'app\modules\jobs\JobsModule',
        ]
    ],
    'components' => [
        'mycomponent' => [
            'class' => 'app\components\MyComponent',
            'terry' => 'xxxx',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'bc4MxrmIw3hAql5LiIQtSLiOucCoMc8X',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'text/json' => 'yii\web\JsonParser',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            // 'errorAction' => 'error/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info', 'trace'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '',
            'rules' => [
                '/' => 'index/default',
                '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                "/<module:\w+>/<controller:\w+>/<action:\w+>" => "<module>/<controller>/<action>"
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
