<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/class/flux.class.php');
require_once(__ROOT__.'/class/cache.class.php');

$expire = 3600;	// Set la durée du cache à 1h
$cache = new Cache('cache/flux.html', $expire);
if(!$cache->isCacheExistAndNotExpire())
{
	$cache->startCache();
	$url = "http://www.futura-sciences.com/rss/espace/actualites.xml";
	$flux = new Flux($url);
	$xml = $flux->getFlux();
	$flux->parseFlux($xml);
	$flux->generateFlux();
	$cache->saveCache();
}

$cache->showCache();