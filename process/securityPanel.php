<?php
session_start();
error_reporting(E_PARSE);
if (!$_SESSION['nombreAdmin'] == "") {
    
} else {
    header("Location: index.php");
    exit();
}