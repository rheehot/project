<?php

chdir(__DIR__);

require '.vendor/autoload.php';



use Doctrine\ORM\Tools\Console\ConsoleRunner;

use MyApp\Bootstrap;



$bootstrap = new Bootstrap();



$container = $bootstrap->createContainer();

$doctrine = $container->get("doctrine");

return ConsoleRunner::createHelperSet($doctrine);
