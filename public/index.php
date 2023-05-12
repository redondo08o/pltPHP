<?php 
require_once ('../app/router/Route.php');
require_once ('../routes/routes.php');
// Route::routing('HomeController','index');
 

$slug = $_GET['slug'] ?? '';
$slug = explode('/', $slug);

$slug[0]= $slug[0] == "" ? "/": $slug[0];

foreach($routes as $v){
  if($v[0] == $slug[0]){
    return Route::route($v[1],$v[2]);
  }
}

