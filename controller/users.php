<?php

//require "./model/usersService.php";

function login($userInputLoginData)
{
  if(isset($userInputLoginData['inputUserEmailAddress'])){
	if(false){
	}
	else{
	  $error="Erreur de Login";
	  require "view/login.php";
	}
  }

  if (!isset($userInputLoginData['inputUserEmailAdress'])) {
	require "view/login.php";
  }
  require "view/login.php";
}