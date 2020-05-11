<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/bootstrap/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>asset/admin/styles.css" rel="stylesheet" media="screen">
        <script src="<?php echo base_url();?>asset/bootstrap/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<br>
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button>
	<br>
	<table style="width: 800px" class="table">
		<thead>
			<tr>
				<th>Mã Banner</th>
				<th>Hình Ảnh</th>
				<th>Ngày Up</th>
				<th>Chức Năng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaBanner']?></td>
				<td><img src="<?php echo base_url();?>public/image/<?php echo $dm['TenBanner']?>" style="width:150px"></td>
				<td><?php echo $dm['Ngay']?></td>
				<td>
					<button class="btn btn-danger"><a href="<?php echo base_url();?>Admin/deletebanner/<?php echo $dm['MaBanner']?>">Xoá</a></button>						
					<button class="btn btn-success">Sửa</button>
				</td>
			</tr>
		<?php endforeach?>
		</tbody>	
	</table>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>Admin/insertbanner" method="post" enctype="multipart/form-data">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="myModalLabel">Thêm Banner</h4>
		      </div>
		      <div class="modal-body">
		       <input type="file" name="image">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
		        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
</body>
</html>
