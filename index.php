<?php
 require "vendor/autoload.php";

$app = new \Slim\Slim();

$app->get('/',function($name){
           echo "Foo!";
});
$app->run();
?>
