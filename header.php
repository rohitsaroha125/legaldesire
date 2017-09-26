<?php
session_start();
include('../connection.php');
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
   $user_id=$_SESSION['id'];
   $select_query=mysqli_query($connection,"select * from user where id='$user_id' ") or die(mysqli_error($connection));
   $result=mysqli_fetch_array($select_query);
    $name=$result['name'];
    $email=$result['email'];
    $address=$result['address'];
    $city=$result['city'];
    $state=$result['state'];
}
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Legal</b>Desire</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image profile">
          <img src="noprofile.gif" class="img-circle" alt="User Image">
        </div>
        
      </div>
        <div class="user-panel">
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
        <form action="logout.php" method="post">
        <button class="btn btn-default" type="submit">
            Log out
        </button>
            </form>
        </div>
        </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>
