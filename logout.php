<?php
   session_start();
   unset($_SESSION["phone"]);
	header("location:select.php");
?>