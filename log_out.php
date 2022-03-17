<?php
 require 'config/connexion.php';
 session_start();
 session_destroy();
  header('location:log_in.php');
?>