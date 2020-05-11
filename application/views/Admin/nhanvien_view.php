<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button>
	<br>
	<table style="width: 800px" class="table">
		<thead>
			<tr>
				<th>Mã Nhân Viên</th>
				<th>Tên Nhân Viên</th>
				<th>Tài Khoản</th>
				<th>Mật Khẩu</th>
				<th>Chức Năng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaNhanVien']?></td>
				<td><?php echo $dm['TenNhanVien']?></td>
				<td><?php echo $dm['username']?></td>
				<td><?php echo $dm['password']?></td>
				<td>
					<button class="btn btn-danger">
						<a href="<?php echo base_url();?>Admin/deletenhanvien/<?php echo $dm['MaNhanVien']?>">
							Xoá
						</a>
					</button>						
					<button class="btn btn-success" data-toggle="modal" data-target="#update">Sửa</button>
				</td>
			</tr>
		<?php endforeach?>
		</tbody>	
	</table>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>Admin/insertnhanvien" method="post" enctype="multipart/form-data">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="myModalLabel">Thêm Nhân Viên</h4>
		      </div>
		      <div class="modal-body">
		     <label>Thêm Tên Nhân Viên</label>
		      <input type="text" name="tennhanvien">
		       <br>
		       <label>Thêm Tài Khoản</label>
		       <input type="text" name="username">
		       <br>
		       <label>Thêm Mật Khẩu</label>
		       <input type="text" name="password">
		       <br>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
		        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url();?>Admin/insertbanner" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Thêm Chi Tiết Hóa Đơn</h4>
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