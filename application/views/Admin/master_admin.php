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
<body>
<content>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href="">Chào Mừng, <?php echo $this->session->userdata['username']?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/logout">Log Out</a>
                            </li>
                        </ul>                 
                    </div>                    
                </div>
            </div>
        </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3" id="sidebar">
                            <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                                <li class="<?php echo isset($banner)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/banner">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query->num_rows();?>
                                        </span>
                                        Banner
                                    </a>
                                </li>
                                <li class="<?php echo isset($nhanvien)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/nhanvien">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query1->num_rows();?>
                                        </span>
                                        Nhân Viên
                                    </a>
                                </li>
                                <li class="<?php echo isset($dienthoai)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/dienthoai">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query2->num_rows();?>
                                        </span>
                                        Điện Thoại
                                    </a>
                                </li>
                                <li class="<?php echo isset($loaidienthoai)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/loaidienthoai">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query3->num_rows();?>
                                        </span>
                                        Loại Điện Thoại
                                    </a>
                                </li>
                                <li class="<?php echo isset($hoadon)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/hoadon">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query4->num_rows();?>
                                        </span>
                                        Hóa Đơn
                                    </a>
                                </li>
                                <li class="<?php echo isset($chitiethoadon)? "active" : "";  ?>">
                                    <a href="<?php echo base_url();?>Admin/chitiethoadon">
                                        <span class="badge badge-info pull-right">
                                            <?php echo $query5->num_rows();?>
                                        </span>
                                        Chi Tiết Hóa Đơn 
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="span9">
                        <?php echo $subview?>
                    </div>
                </div>
            </div>
        </content>        
    </body>
</html>