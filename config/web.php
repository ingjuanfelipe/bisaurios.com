<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
	'id' => 'basic',
	'language' => 'es-CO',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'ar7nrw9487crwh94e87trcyweo',
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'user' => [
			'identityClass' => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'enableSwiftMailerLogging' => true,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'email-smtp.us-east-1.amazonaws.com', // ej. smtp.mandrillapp.com o smtp.gmail.com
				'username' => 'AKIAVSX7UHUIOBF2JKID',// 
				'password' => 'BEQBFMvNBVQIG1VoEquJiRgb/2A+cA4tUWr8lWjkq5OD',
				'port' => '587', // El puerto 25 es un puerto común también
				'encryption' => 'tls', // Es usado también a menudo, revise la configuración del servidor

			],
			'messageConfig' => [
				'charset' => 'UTF-8',
				'from' => ['web@bisaurios.com' => 'Bisaurios.com'],
			],
			// Plantillas de Correo - Se pueden personalizar en el Config de cada portal, pero por ahora no es necesario.
			'htmlLayout' => '@app/views/layouts/email',
			//'textLayout' => 'layouts/main-text',
			'useFileTransport' => false,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db' => $db,
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
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
