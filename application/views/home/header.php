<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="">
        <img alt="Brand" src="<?php echo base_url() ?>public/image/LOGO2.png" height="40px" width="100px">
      </a>
        <form id="navbar-form" action="<?php echo base_url();?>Home/search" method="post" class="navbar-form navbar-left" >
          <div class="input-group">
            <input type="text" name="timkiem" class="form-control" placeholder=" Bạn tìm gì..." width="100%" value="<?php echo isset($searchname)? "$searchname" : "";  ?>">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
      </form>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="menu-side">
        <li><a class="<?php echo isset($trangchu)? "active" : "";  ?>" href="<?php echo base_url()?>Home/trangchu"><span class="glyphicon glyphicon-home"></span><span> Trang chủ</span></a></li>
        <li><a class="<?php echo isset($tintuc)? "active" : "";  ?>" href="<?php echo base_url()?>Home/tintuc"><span class="glyphicon glyphicon-globe"></span> Tin tức</a></li>
        <li><a class="" href=""><span class="glyphicon glyphicon glyphicon-earphone"></span> Liên Hệ</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>