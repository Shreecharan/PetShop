<?php
	require_once 'vendor/autoload.php';
	use Kreait\Firebase\Factory;
	$factory = (new Factory)
    ->withServiceAccount('./firebase/secret/firm-plexus-220713-4bbcee514bd5.json')
    ->withDatabaseUri('https://firm-plexus-220713.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
?>