<?php
define('APP_ROOT', __DIR__);

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$extension = ".php";
$filePath = APP_ROOT."/public$uri".$extension;

if ($method === "GET" && $uri === "/"){
  require_once APP_ROOT."/public/index".$extension;
} elseif($method === "GET" && $uri === "/login"){
  require_once $filePath; 
} elseif($method === "POST" && $uri === "/login"){
  require_once $filePath;
  echo "<pre>";
  print_r($_POST);
} elseif($method === "GET" && $uri === "/register"){
  require_once $filePath;
} elseif ($method === "POST" && $uri === "/register") {
  require_once $filePath;
  echo "<pre>";
  print_r($_POST);
}else{
  echo "<h1 align='center'>404 - Page Not Found.</h1>";
}

//$data = [
//  'hi'
//];

//$asycn = stream_set_blocking($data,false);

