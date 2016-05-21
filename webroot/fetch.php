<?php
header("Content-Type: text/plain");
require_once("common.php");

$feed = $container['feed'];
$feedName = $_GET['feed'];

if (!isset($container[$feedName]))
{
	throw new Exception('Invalid feed name to fetch.');
}

$comic = $container[$feedName];
$comic->fetchAllAndStore();
