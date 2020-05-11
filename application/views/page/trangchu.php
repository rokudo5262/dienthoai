
		<div class="slider">
			<div class="row">
  <div class="col-md-8 imgslider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <?php for($i=1;$i<count($banner);$i++){?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>"></li>
    <?php }?>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
          <div class="item active">
        <a><img style="height: 289px" src="<?php echo base_url();?>public/image/<?php echo $banner[0]['TenBanner']?>" width="100%"></a>
      </div>
      <?php for($i=1;$i<count($banner);$i++){?>
          <div class="item">
        <a><img style="height: 289px" src="<?php echo base_url();?>public/image/<?php echo $banner[$i]['TenBanner']?>" width="100%"></a>
      </div>
      <?php }?>
    </div>
  </div>
</div>
      <div class="col-md-4 col-sm-8">
        <div class="panel panel-primary tincongnghe1">
          <div class="panel-heading">Tin Công Nghệ Mới Nhất<p class="tatca"><a href="">Xem tất cả</a></p></div>
      <div class="panel-body">
                  <div class="media">
            <a href="http://cameraminhlonghml.com/xuly/detailNews/5">
            <div class="media-body">
              <h5 class="media-heading">Trung Quốc có thêm ít nhất 4 tỷ phú USD nhờ hệ thống camera giám sát toàn quốc</h5>
              <p id="ghichu" style="margin-top: 5px;margin-bottom: 5px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/999x-999-15508046061302087639747-crop-15508046371902134003193.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
                 <div class="media">
            <a href="http://cameraminhlonghml.com/xuly/detailNews/3">
            <div class="media-body">
              <h5 class="media-heading">10 Camera An Ninh tốt nhất hiện nay cho gia đình (Tư vấn mua 2019)</h5>
              <p id="ghichu" style="margin-top: 5px;margin-bottom: 5px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/cameraa.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
                 <div class="media">
            <a href="http://cameraminhlonghml.com/xuly/detailNews/2">
            <div class="media-body">
              <h5 class="media-heading">TOP 7 Camera an ninh trong nhà & ngoài trời tốt nhất Full HD</h5>
              <p id="ghichu" style="margin-top: 5px;margin-bottom: 5px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/camera-wifi-hai-nam.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <div class="row tincctablet">
    <div class="col-sm-8">
      <div class="panel panel-primary">
          <div class="panel-heading">Tin Công Nghệ<p class="tatca"><a href="#">Xem tất cả</a></p></div>
      <div class="panel-body">
                                <div class="media">
            <a href="#">
            <div class="media-body">
              <p class="media-heading">Trung Quốc có thêm ít nhất 4 tỷ phú USD nhờ hệ thống camera giám sát toàn quốc</p>
              <p id="ghichu">11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/999x-999-15508046061302087639747-crop-15508046371902134003193.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
                 <div class="media">
            <a href="#">
            <div class="media-body">
              <p class="media-heading">10 Camera An Ninh tốt nhất hiện nay cho gia đình (Tư vấn mua 2019)</p>
              <p id="ghichu">11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/cameraa.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
                 <div class="media">
            <a href="#">
            <div class="media-body">
              <p class="media-heading">TOP 7 Camera an ninh trong nhà & ngoài trời tốt nhất Full HD</p>
              <p id="ghichu">11/01/2019 16:01:24</p>
            </div>
            <div class="media-left">
                <img class="media-object" src="http://cameraminhlonghml.com/images/camera-wifi-hai-nam.jpeg" height="50px" width="80px">
            </div>
            </a>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>		
</div>
    <div class="container">
    <div class="content" >
      <div class="col-md-2 col-md-push-10">
<div class="panel panel-primary httt">
  <div class="panel-heading">
    <h3 class="panel-title">Hỗ trợ trực tuyến</h3>
  </div>
  <div class="panel-body">
    <!-- <ul id="khachhang"> -->
            <div class="form-group col-md-12">
            </div>
      <!-- </ul> -->
  </div>
</div>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>     
</div>
    <div class="col-md-2 col-sm-3 col-md-pull-2">
      <div class="panel panel-primary hang">
      <div class="panel-heading">
        <h3 class="panel-title">Hãng</h3>
      </div>
      <form action="<?php echo base_url();?>Home/ketqua" method="post">
      <div class="panel-body">
      <ul>
        <?php foreach ($loaidienthoai as $data):?>
        <li><input type="checkbox" name="check_hang[]" value="<?= $data['MaLoaiDienThoai']?>"><?= $data['TenLoaiDienThoai']?></li>
      <?php endforeach?>
      </ul>
      <button>Tìm</button>
    </div>
  </form>
</div>
<div class="panel panel-primary hang">
  <div class="panel-heading">
    <h3 class="panel-title">Giá Tiền</h3>
      </div>
      <div class="panel-body">
      <ul>
        <li><input type="checkbox" value="">5000000</li>
      </ul>
    </div>
</div>
<div class="panel panel-primary hang">
  <div class="panel-heading">
    <h3 class="panel-title">Sắp Xếp</h3>
      </div>
      <form action="<?php echo base_url();?>Home/sapxep" method="post">
      <div class="panel-body">
      <ul>
        <li><input type="checkbox" name="sap_xep[]" value="">Tăng Dần</li>
        <li><input type="checkbox" name="sap_xep[]" value="">Giảm Dần</li>
      </ul>
      <button>Sắp Xếp</button>
    </div>
  </form>
</div>
</div>
      <div class="col-md-8 col-sm-9 col-md-pull-2">
      <div class="row">
  <div class="col-md-12 spm">
  <div class="panel panel-primary">
  <div class="panel-heading" style="border-bottom: 3px solid #cc1313">
    <h3 class="panel-title" style="text-align: left;">Sản Phẩm Mới</h3>
  </div>
              <div class="panel-body">
                  <div class="row">
                    <?php foreach ($dienthoai6 as $dm):?>
                    <div class="col-md-4 col-sm-6 sp">
                  <div class="thumbnail">
                    <img  src="<?php echo base_url();?>public/image/<?= $dm['HinhAnh']?>">
                    <div class="caption">
                    <h3><?= $dm['TenDienThoai']?></h3>
                    <p>Giá: <?= $dm['Gia']?></p>
                    <p><a href="<?php echo base_url();?>home/insert/<?= $dm['MaDienThoai']?>" class="btn btn-primary" role="button" data-toggle="tooltip" title="Trả Góp" data-placement="bottom">giỏ hàng</a>
                    <a href="<?php echo base_url();?>home/chitiet/<?= $dm['MaDienThoai']?>" class="btn btn-default" role="button">Chi Tiết</a></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>  
            </div>
          </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="panel panel-primary tcsp">
      <div class="panel-heading" style="border-bottom: 3px solid #cc1313">
        <h3 class="panel-title" style="text-align: left;">Tất cả sản phẩm</h3>
      </div>
        <div class="panel-body">
              <div class="row">
                <?php foreach ($dienthoai as $dm):?>
                 <div class="col-md-4 col-sm-6 sp">                     
              <div class="thumbnail">
                  <img  src="<?php echo base_url();?>public/image/<?= $dm['HinhAnh']?>">
                    <div class="caption">
                    <h3><?= $dm['TenDienThoai']?></h3>
                    <p>Giá: <?= $dm['Gia']?></p>
                    <p><a href="<?php echo base_url();?>home/datmua/<?= $dm['MaDienThoai']?>" class="btn btn-primary" role="button" data-toggle="tooltip" title="Trả Góp" data-placement="bottom">giỏ hàng</a>
                    <a href="<?php echo base_url();?>home/chitiet/<?= $dm['MaDienThoai']?>" class="btn btn-default" role="button">Chi Tiết</a></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>