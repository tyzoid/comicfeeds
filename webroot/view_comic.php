<?php

require_once("common.php");

$view = $container['view'];
$feedName = $_GET['feed'];
$feedType = $_GET['type'];

if (!isset($container[$feedName]))
{
	throw new Exception('Invalid feed name to fetch.');
}

header("Content-Type: text/xml");
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (60*30)) . ' GMT');
header('Cache-Control: public, must-revalidate, max-age=1800');

echo $view->getFeed($feedName, $feedType);
