<?php

if (YII_DEBUG) {
	return [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=puntosaurios',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',

		// Schema cache options (for production environment)
		//'enableSchemaCache' => true,
		//'schemaCacheDuration' => 60,
		//'schemaCache' => 'cache',
	];
}else{
	return [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=mydbs.c5c0w1nsibsr.us-east-1.rds.amazonaws.com;dbname=puntosaurios',
		'username' => 'ingjuanfelipe',
		'password' => 'msvnlyRNPBHmVeUfpVTt',
		'charset' => 'utf8',

		// Schema cache options (for production environment)
		//'enableSchemaCache' => true,
		//'schemaCacheDuration' => 60,
		//'schemaCache' => 'cache',
	];
}