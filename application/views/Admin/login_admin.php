<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/admin/styles.css" rel="stylesheet" media="screen">
        <script src="<?php echo base_url();?>asset/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" name="login" action="<?php echo base_url();?>admin/check_login" method="post">
        <h3 class="form-signin-heading">Vui Lòng Đăng Nhập</h3>
        <input type="text" class="input-block-level" name="username" required="">
        <input type="password" class="input-block-level" name="password" required="">
        <label class="checkbox"><input type="checkbox" value="remember-me">Ghi nhớ tôi</label>
        <button class="btn btn-large btn-info" type="submit">Đăng Nhập</button>
      </form>
    </div> 
    <!-- /container -->
    <script src="asset/vendors/jquery-1.9.1.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>