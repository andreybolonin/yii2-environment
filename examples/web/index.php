<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$env = new \janisto\environment\Environment(dirname(__DIR__) . '/config', 'dev');
$env->setup();
(new yii\web\Application($env->web))->run();
//$env->showDebug(); // show produced environment configuration
