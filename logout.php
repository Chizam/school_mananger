<?php

session_start();
require_once('config.php');

session_unset($_SESSION['userid']);
session_destroy();

header('location:login.php');
?>