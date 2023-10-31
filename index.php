<?php

use Pavelmaksimov25\AutoMergeTestDep\App;

if (!is_file(dirname(__DIR__).'/vendor/autoload_runtime.php')) {
throw new LogicException('Symfony Runtime is missing. Try running "composer require symfony/runtime".');
}

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

(new App())->run();
