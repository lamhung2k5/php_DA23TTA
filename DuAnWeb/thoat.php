<?php
session_start();
$_SESSION["error_message"] = " ";

session_unset();
session_destroy();
header("Location: index.php");
exit();