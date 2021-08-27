<?php
session_start();
if($_GET['logout']) {
    unset($_SESSION['username']);
    header("location: index.php");
};
