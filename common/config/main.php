<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,

            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.163.com',
                'username' => '',
                'password' => '',
                'port' => '25',
                'encryption' => 'tls',
            ],

            'messageConfig'=>[
                'charset'=>'UTF-8',
                'from'=>['邮箱@163.com'=>'发送人名称']
            ],
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
