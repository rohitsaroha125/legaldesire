<?php
session_start();
ob_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    session_destroy();
    header('location: ../index.html');
}
?>