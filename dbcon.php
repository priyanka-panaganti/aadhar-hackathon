<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
   ->withServiceAccount('sample.json')
   ->withDatabaseUri('https://sample-18975-default-rtdb.firebaseio.com/');
   $database = $factory->createDatabase();

?>


