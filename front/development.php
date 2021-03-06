<?php

/**
 * DEVELOPMENT MODE
 */


/**
 * Debug stacktrace using WHOOPS
 */

$app->config->catch = false;

$handler = new Whoops\Handler\PrettyPageHandler;
$handler->addDataTableCallback('App Uri', function() use ($app) {
    return (array)$app->context->request->uri;
});
$handler->addDataTableCallback('App Route', function() use ($app) {
    return (array)$app->context->route;
});
$handler->addDataTableCallback('App Invokable', function() use ($app) {
    $invokable = $app->context->invokable;
    array_shift($invokable->params);
    return (array)$invokable;
});
$handler->addDataTableCallback('App Access', function() use ($app) {
    return (array)$app->context->access;
});
$handler->addDataTableCallback('App Response', function() use ($app) {
    return (array)$app->context->response;
});

$whoops = new Whoops\Run;
$whoops->pushHandler($handler)->register();



/**
 * Vardump
 *
 * @param $param
 * @param $params
 */
function vd($param, ...$params)
{
    var_dump($param, ...$params);
}



/**
 * Vardump and die
 *
 * @param $param
 * @param ...$params
 */
function dd($param, ...$params)
{
    var_dump($param, ...$params);
    exit;
}