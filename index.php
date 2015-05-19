<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 19.05.15
 * Time: 22:26
 */

require_once('vendor/autoload.php');

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function()use($app){


    return 'ok';
});

$app->run();