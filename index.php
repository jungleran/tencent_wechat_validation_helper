<?php

/**
 * @file
 * Main file.
 */

include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/config.php';

use EasyWeChat\Foundation\Application;

$options = [
  'debug'  => TRUE,
  'app_id' => $app_id,
  'secret' => $secret,
  'token'  => $token,
  'aes_key' => $aes_key,
  'log' => [
    'level' => 'debug',
    'file'  => $file,
  ],
];

$app = new Application($options);
$response = $app->server->serve();
$response->send();
