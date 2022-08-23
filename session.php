<?php
session_start();
require('db/db.php');

if(isset($_GET['pageName'])){ $pageName=$_GET['pageName']; }else{$pageName=$title;}
?>