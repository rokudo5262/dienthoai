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
				<th>Mã Hóa Đơn</th>
				<th>Tên Khách Hàng</th>
				<th>Số Điện Thoại</th>
				<th>Địa Chỉ</th>
				<th>Giới Tính</th>
				<th>Chức Năng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['id']?></td>
				<td><?php echo $dm['name']?></td>
				<td><?php echo $dm['sdt']?></td>
				<td><?php echo $dm['diachi']?></td>
				<td><?php echo $dm['gioitinh']?></td>
				<td>
					<button  class="btn btn-danger"><a href="<?php echo base_url();?>Admin/deletehoadon/<?php echo $dm['id']?>">Xoá</a></button>						
					<button class="btn btn-success" data-toggle="modal" data-target="#update">Sửa</button>
				</td>
			</tr>
			<?php endforeach?>
		</tbody>	
	</table>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>Admin/inserthoadon" method="post" enctype="multipart/form-data">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="myModalLabel">Thêm Hóa Đơn</h4>
		      </div>
		      <div class="modal-body">
		      	<label>Tên Khách Hàng</label>
		       <input type="text" name="name">
		       <label>Số Điện Thoại</label>
		       <input type="text" name="sdt">
		       <label>Địa Chỉ</label>
		       <input type="text" name="diachi">
		       <label>Giới Tính</label>
		       <input type="text" name="gioitinh">

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
		        <button type="submit" class="btn btn-primary" >Lưu Thay Đổi</button>
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