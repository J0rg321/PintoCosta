<?php

require_once "dbConnector.php";

$pswdHashed = password_hash($pswd, PASSWORD_DEFAULT);

function isLoginCorrect($userInputLoginData, $userPwd):bool{
  $userPwDd = getUserPwd($userEmailAddress);
  if(password_verify($userPwd, $userPwdDd)){

  }
}
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