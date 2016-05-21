<?php
libxml_disable_entity_loader(false);

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../classes/autoload.php');

require('dependency_injection.php');

set_exception_handler(function($ex)
{
    header('Content-Type: text/plain');
    http_response_code(500);
    echo $ex->getMessage();
});
