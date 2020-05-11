<div class="container">
  <div class="content" >
    <div class="col-md-2 col-md-push-10">  </div>
    <div class="col-md-2 col-sm-3 col-md-pull-2"></div>
    <div class="col-md-8 col-sm-9 col-md-pull-2">
      <div class="row">
        <div class="col-md-12 spm">
          <div class="panel panel-primary">
            <div class="panel-heading" style="border-bottom: 3px solid #cc1313">
              <h3 class="panel-title" style="text-align: left;">Giỏ Hàng</h3>
            </div>
            <div class="panel-body">
              <table class="table">
                <tr>
                  <th>Mã</th>
                  <th>Hình Ảnh</th>
                  <th>Tên điện thoại</th>
                  <th>Giá Tiền</th>
                  <th>Số Lượng</th>
                  <th>Xóa</th>
                </tr> 
                <?php var_dump($giohang);
                  foreach ((array)$giohang as $key => $value) {
                 ?>
                <tr>
                 <td><?php echo $value['id']?></td>
                 <td><img width="100px" src="<?php echo base_url();?>public/image/<?php echo $value['option']['img']?>"></td>
                 <td><?php echo $value['name'] ?></td>
                 <td><?php echo $value['price']?></td>
                 <td><input type="number" min="0" max="100" id="number" value="<?php echo $value['qty'] ?>"></td>
                 <td><a href="<?php echo base_url();?>home/delete/<?php echo $value['rowid'] ?>">Xóa</a></td>
                </tr>
                <?php } ?>
              </table>
              <label>Tổng Tiền: <span><?php echo $this->cart->format_number($this->cart->total()); ?></span> VND</label>
              <p><a href="#" class="btn btn-primary" role="button" data-toggle="tooltip" title="Thanh Toán" data-placement="bottom">Thanh Toán</a>
                <a href="<?php echo base_url();?>home/index" class="btn btn-primary" role="button" data-toggle="tooltip" title="Trở về" data-placement="bottom">Thêm Hàng</a>
                <a href="<?php echo base_url();?>home/xoahang" class="btn btn-primary" role="button" data-toggle="tooltip" title="Trở về" data-placement="bottom">Xóa Hàng</a>
              </p>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading" style="border-bottom: 3px solid #cc1313">
              <h3 class="panel-title" style="text-align: left;">Thanh Toán</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url();?>home/muahang">
                  <input type="text" name="name"><br>
                  <input type="text" name="diachi"><br>
                  <input type="text" name="sdt"><br>
                  <input type="text" name="gioitinh"><br>
                  <button>Thanh Toán</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>