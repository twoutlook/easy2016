<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1_J8Dkr2Mbq412oKccDWOTBSSouSbYAh',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
//		'allowedIPs' => ['185.18.77.102'] // adjust this to your needs
      //'allowedIPs' => ['127.0.0.1', '::1', 'localhost']
	'allowedIPs' => ['222.92.254.194','185.87.108.164','222.92.254.205'] // 2016/4/13 04:05    vpn in finland 185.87.108.164

    ];
}

return $config;
