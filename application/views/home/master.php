
<!DOCTYPE html>
<html>
<head>
	<title>Camera Minh Long</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mycss.css">
<link rel="icon" href="http://cameraminhlonghml.com/images/logo-ver40x40.png">
<link rel="stylesheet" type="text/css" href="http://cameraminhlonghml.com/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://cameraminhlonghml.com/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="http://cameraminhlonghml.com/public//cssindex.css" />
<script type="text/javascript" src="http://cameraminhlonghml.com/js/jquery.js"></script>
<script type="text/javascript" src="http://cameraminhlonghml.com/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
	<div class="container">
		<header>
			<!-- 	header -->
      <?php echo isset($header)? $header : "";  ?>
<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: #337ab7"> <span class="glyphicon glyphicon-user">
  
        </span> Đăng Nhập</h4>
      </div>
      <div class="modal-body">
        <p style="font-weight: bold;">Tên Đăng Nhập</p>
        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Tên Đăng Nhập"></p>
        <p style="font-weight: bold;">Mật Khẩu</p>
        <p><input type="password" class="form-control" id="inputPassword" placeholder=" Mật Khẩu"></p>
        <p><a href="">Quên Mật Khẩu</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-primary">Đăng Nhập</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: #337ab7"> <i class="fa fa-user-plus" aria-hidden="true"></i> Đăng Ký</h4>
      </div>
      <div class="modal-body">
        <p style="font-weight: bold;">Tên Đăng Nhập</p>
        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Tên Đăng Nhập"></p>
        <p style="font-weight: bold;">Mật Khẩu</p>
        <p><input type="password" class="form-control" id="inputPassword" placeholder=" Mật Khẩu"></p>
        <p style="font-weight: bold;">Email</p>
        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Email"></p>
        <p style="font-weight: bold;">Số Điện Thoại</p>
        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Số Điện Thoại"></p>
        <p style="font-weight: bold;">Địa Chỉ</p>
        <p><input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Địa Chỉ"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-primary">Đăng Ký</button>
      </div>
    </div>
  </div>
</div>		
</header>


    <!-- body -->
    <?php echo isset($body)?$body:""; ?>
  
	<div class="container">
		<!-- footer -->
     <?php echo  isset($footer)? $footer : "";  ?>
	</div>
</body>
</html>