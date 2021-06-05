<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';



return function (array $context) {

    $_SERVER[‘APP_ENV’]=’prod’;
    $_SERVER['DATABASE_URL']='mysql://sql5416954:uUIDQuvlSl@sql5.freemysqlhosting.net:3306/sql5416954?serverVersion=5.5.62';

    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
