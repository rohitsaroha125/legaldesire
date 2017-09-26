<?php

session_start();
ob_start();

include('../connection.php');
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
   $user_id=$_SESSION['id'];
}

$fn=mysqli_real_escape_string($connection,$_POST['nameboxfn']);
$ln=mysqli_real_escape_string($connection,$_POST['nameboxln']);
$email=mysqli_real_escape_string($connection,$_POST['emailbox']);
$address=mysqli_real_escape_string($connection,$_POST['address']);
$city=mysqli_real_escape_string($connection,$_POST['city']);
$state=mysqli_real_escape_string($connection,$_POST['state']);

$update_query = "update user set ";

if(isset($fn) && !empty($fn) && isset($ln) && !empty($ln))
{
    $fnlen=strlen($fn);
    $fnf=strtoupper(substr($fn,0,1));
    $fnl=strtolower(substr($fn,1,$fnlen));
    $newfn=$fnf.$fnl;

    $lnlen=strlen($ln);
    $lnf=strtoupper(substr($ln,0,1));
    $lnl=strtolower(substr($ln,1,$lnlen));
    $newln=$lnf.$lnl;
    
    $fullname=$newfn." ".$newln;
    
    $update_query .= "name='$fullname',";
}
if(isset($email) && !empty($email))
{
$update_query .= "email='$email',";
}
if(isset($address) && !empty($address))
{
    $update_query .= "address='$address',";
}
if(isset($city) && !empty($city) && isset($state) && !empty($state))
{
    $update_query .= "city='$city',state='$state',";
}
$new_update_query=substr($update_query,0,-1);
$new_update_query .= " where id='$user_id'";
$exe_query=mysqli_query($connection,$new_update_query) or die(mysqli_error($connection));
if($exe_query)
{
    header('location: index.php');
}
else
{
    echo "some problem going on";
}
?>