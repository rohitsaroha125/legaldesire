<?php
session_start();
ob_start();
include 'connection.php';
$fn=mysqli_real_escape_string($connection,trim($_POST['fn']));
$ln=mysqli_real_escape_string($connection,trim($_POST['ln']));
$email=mysqli_real_escape_string($connection,trim($_POST['email']));
$password=mysqli_real_escape_string($connection,trim($_POST['pass']));
$encrypt_password=md5($password);
//making first letter uppercase and other letters lowercas

$fnlen=strlen($fn);
$fnf=strtoupper(substr($fn,0,1));
$fnl=strtolower(substr($fn,1,$fnlen));
$newfn=$fnf.$fnl;

$lnlen=strlen($ln);
$lnf=strtoupper(substr($ln,0,1));
$lnl=strtolower(substr($ln,1,$lnlen));
$newln=$lnf.$lnl;
    
$fullname=$newfn." ".$newln;

$query=mysqli_query($connection,"insert into user (id,name,email,password) values ('','$fullname','$email','$encrypt_password')") or die(mysqli_error($connection));
if($query)
{
    //selecting our unique id for setting session
    $select_query=mysqli_query($connection,"select * from user where email='$email' ") or die(mysqli_error($connection));
    $count_rows=mysqli_num_rows($select_query);
    if($count_rows==1)
    {
        $result=mysqli_fetch_array($select_query);
        $_SESSION['id']=$result['id'];
        if(isset($_SESSION['id']) && !empty($_SESSION['id']))
        {
            header('location: start/index.php');
        }
    }
}
else
{
    echo "some problem going on";
}
?>