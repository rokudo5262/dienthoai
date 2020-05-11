<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button>
	<br>
<table style="width: 800px" class="table">
		<thead>
			<tr>
				<th>Mã Điện Thoại</th>
				<th>Tên Điện Thoại</th>
				<th>Mã Loại Điện Thoại</th>
				<th>Hình Ảnh</th>
				<th>Giá</th>
				<th>Ghi Chú</th>
				<th>Chức Năng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ds as $dm):?>
			<tr>				
				<td><?php echo $dm['MaDienThoai']?></td>
				<td><?php echo $dm['TenDienThoai']?></td>
				<td><?php echo $dm['MaLoaiDienThoai']?></td>
				<td><img src="<?php echo base_url();?>public/image/<?php echo $dm['HinhAnh']?>" style="width:150px"></td>
				<td><?php echo $dm['Gia']?></td>
				<td><?php echo $dm['GhiChu']?></td>
				<td>
					<button class="btn btn-danger"><a href="<?php echo base_url();?>Admin/deletedienthoai/<?php echo $dm['MaDienThoai']?>">Xoá</a></button>						
					<button class="btn btn-success" data-toggle="modal" data-target="#update">Sửa</button>
				</td>
			</tr>
		<?php endforeach?>
		</tbody>	
	</table>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>Admin/insertdienthoai" method="post" enctype="multipart/form-data">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="myModalLabel">Thêm Điện Thoại</h4>
		    </div>
		    <div class="modal-body">
		      <label>Tên Điện Thoại</label>
		      <input type="text" name="tendienthoai">
		      <label> Hình Ảnh</label>
		      <input type="file" name="image">
		      <label> Giá</label>
		      <input type="text" name="gia">
		      <label>Ghi Chú</label>
		       <textarea id="ckeditor" name="ghichu"></textarea>
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
	<script src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('ckeditor',{
		        filebrowserBrowseUrl : '<?=base_url()?>asset/ckfinder/ckfinder.html',
		        filebrowserImageBrowseUrl : '<?=base_url()?>asset/ckfinder/ckfinder.html?type=Images',
		        filebrowserFlashBrowseUrl : '<?=base_url()?>asset/ckfinder/ckfinder.html?type=Flash',
		        filebrowserUploadUrl : '<?=base_url()?>asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		        filebrowserImageUploadUrl : '<?=base_url()?>asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		        filebrowserFlashUploadUrl : '<?=base_url()?>asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
		        });
	</script>
</body>
</html>