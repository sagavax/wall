<?php
/*
 * Core file for library and parameter handling:
 *
 * - $LastChangedDate: 2009-12-09 23:39:18 +0100 (Mi, 09 Dez 2009) $
 * - $Rev: 276 $
 */

// include("config/config.php");

  date_default_timezone_set('Europe/Bratislava');
  global $link;
  
  //$link = mysqli_connect(null, "brick_wall", "h3jSXv3gLf", "brick_wall", null, "/tmp/mariadb55.sock");
  $link = mysqli_connect("localhost", "root", "", "brick_wall");

  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
  }
//mysqli_select_db($link,$dbname);

//
// Setup the UTF-8 parameters:
// * http://www.phpforum.de/forum/showthread.php?t=217877#PHP
//
// header('Content-type: text/html; charset=utf-8');
mysqli_query($link,'set character set utf8;');
mysqli_query($link,"SET NAMES `utf8`");

                   

?>
