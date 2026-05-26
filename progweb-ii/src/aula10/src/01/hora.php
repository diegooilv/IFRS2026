<?php

session_start();
$_SESSION['hora'] = date("F j, Y, g:i a");
header('location: ./verhora.php');