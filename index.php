<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/global.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue-light.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <?php include 'header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
          <section class="col-lg-1 connectedSortable"> </section>
        <section class="col-lg-10 connectedSortable">
        
        <form action="update_profile.php" method="post" id="submit-form">  
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">User Info</h3>
             
            </div>
            <div class="box-body">
                <div class="form-group">
                    Info:<br><br>
                </div>
                <div class="form-group">
                    Name:<br>
                    <b><?php echo $name; ?></b>&nbsp;&nbsp;<button type="button" class="btn btn-default" id="edit-name">Edit
                    </button><br><br>
                    <input type="text" class="form-control" name="nameboxfn" id="nameboxfn" placeholder="Enter First Name" style="display:none;width:40%;">
                    <input type="text" class="form-control" name="nameboxln" id="nameboxln" placeholder="Enter Last Name" style="display:none;width:40%;">
                    <br><br>
                    Email:<br>
                  <b><?php echo $email; ?></b>&nbsp;&nbsp;<button type="button" class="btn btn-default" id="edit-email">Edit
                    </button><br><br>
                    <input type="email" class="form-control" name="emailbox" id="emailbox" placeholder="Enter Email Address" style="display:none">
                    <br><br>
                    Contact Address:<br><br>
                    <?php
                    if($address!="" || $city!="" || $state!="")
                    {
                        $full_address="Your Address: <b>";
                        if($address!="")
                        {
                            $full_address .= $address.",";
                        }
                        if($city!="")
                        {
                            $full_address .= $city.",";
                        }
                        if($state!="")
                        {
                            $full_address .= $state.",";
                        }
                        $new_full_address = substr($full_address,0,-1);
                        $new_full_address .= '</b>&nbsp;&nbsp;<button type="button" class="btn btn-default" id="edit-address">Edit
                    </button><br>
                    <div id="addressbox" style="display:none">
                    Address:
                  <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                   City:
                  <input type="text" class="form-control" name="city" id="city" placeholder="Enter City"> 
                    State:
                  <input type="text" class="form-control" name="state" id="state" placeholder="Enter State"><br>
                    <button type="button" class="pull-right btn btn-default" id="seemap" name="seemap">See on map</button><br></div>';
                        echo $new_full_address;
                    }
                    else
                    {
                       echo 'Address:
                  <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                   City:
                  <input type="text" class="form-control" name="city" id="city" placeholder="Enter City"> 
                    State:
                  <input type="text" class="form-control" name="state" id="state" placeholder="Enter State"><br>
                    <button type="button" class="pull-right btn btn-default" id="seemap" name="seemap">See on map</button><br>';
                    }
                    ?>
                </div>
                <hr>
                <div id="showmap">
                <center>
                <iframe width="80%" height="500px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDrYddpZE4B64DUhBuC1rGiF0wlWkpEz4o&q=<?php echo $address; ?>,<?php echo $city; ?>+<?php echo $state; ?>" allowfullscreen></iframe>
                </center>
              </div>
            </div>
            <div class="box-footer clearfix">
              <button type="Submit" class="pull-right btn btn-default" id="senddata">Update profile
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
        </form>
        </section>
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="edit.js"></script>
</body>
</html>
