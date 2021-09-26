<?php
include 'dbconn.php';
session_start();

session_unset();

header("location: index.html");
?>