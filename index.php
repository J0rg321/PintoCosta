<?php

session_start();
require "controller/navigation.php";
require "controller/users.php";
//require "controller/snow.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
	case 'home' :
	  home();
	  break;
	case 'snows' :
	  snows();
	  break;
	case 'login' :
	  login($_POST);
	  break;
	case 'logout' :
	  logout();
	  break;
	default :
	  lost();
  }
} else {
  home();
}