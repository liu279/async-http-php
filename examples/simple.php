<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/8/25
 * Time: 14:05
 */

date_default_timezone_set("PRC");
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$async = new \Jenner\Http\Async();
$task = \Jenner\Http\Task::createGet("http://www.baidu.com");
$async->attach($task, "baidu");

$task2 = \Jenner\Http\Task::createGet("http://www.google.com");
$async->attach($task2, "google");

$task3 = \Jenner\Http\Task::createGet("http://www.facebook.com");
$async->attach($task3, "facebook");


$result = $async->execute();
print_r($result);