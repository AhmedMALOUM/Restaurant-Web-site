<?php
  if(!isset($_SESSION)) { 
    session_start(); } 
if (isset($_GET['deconnect']) == "1"){
    unset($_SESSION['username']);
}
header('location:index.php');

?>