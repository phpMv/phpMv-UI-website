<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
		'Ajax' => __DIR__ . '/../vendor/phpmv/php-mv-ui/Ajax/'
))->register();
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
    	$config->application->libraryDir
    )
)->register();
