<?php

error_reporting(E_ALL);
  //ini_set('error_reporting', E_ALL);
  ini_set('display_errors', '1');
require_once('config.php');
require_once('insert.php');

$view = new data_insert();


if (isset($_POST['create']) && !empty($_POST)){

   //$date=date("Y-m-d h:i:sa");
  
    $view->enter($_POST);
}
if (isset($_POST['add']) && !empty($_POST)) {
  
    $view->add($_POST);
}


if (isset($_POST['log'])){

   //$date=date("Y-m-d h:i:sa");
  
    $view->login($_POST);
}



?>