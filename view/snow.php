<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="RentASnow - Accueil";
?>

<h3>La y'a des Snowboards</h3>
<?php
  $content = ob_get_clean();
  require "gabarit.php";
