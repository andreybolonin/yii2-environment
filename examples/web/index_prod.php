<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$env = new \janisto\environment\Environment(dirname(__DIR__) . '/config', 'prod');
$env->setup();
(new yii\web\Application($env->web))->run();