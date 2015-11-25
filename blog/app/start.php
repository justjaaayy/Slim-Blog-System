<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

//  Database Connection
$app->container->singleton('db', function() {
  return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root');
});

// Views
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
  new \Slim\Views\TwigExtension()
];

require 'routes.php';

$app->run();

?>
