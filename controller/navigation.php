<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:10
 * Updated by : 12-MAR-2019 - nicolas.glassey
 *              Add register function
 *              15-APR-2019 - pascal.benzonana
 *              Cart management with error's check
 */

/**
 * This function is designed to redirect the user to the home page (depending on the action received by the index)
 */

function home(){
    $_GET['action'] = "home";
    require "view/home.php";
}
function snow(){
  $_GET['action'] = "snow";
  require "view/snow.php";
}