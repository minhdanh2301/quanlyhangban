<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
         <?php include '../view/layout/headeradmin.php'; ?>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>
        <!-- Left Panel -->
        <?php include '../view/layout/menuleft.php'; ?>
 <!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include '../view/layout/menuadmin.php'; ?>
            <!-- /header -->
            <!-- Header-->
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1><a href="../view/test.php" class="btn btn-success"><i class="fa fa-undo"> Quay lại</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li class="active">Sửa sản phẩm</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">

                <div>
                    <div class="card">
                        <div class="card-header">
                            <strong>Thông tin sản phẩm</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="../controller/sanphamController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh</label></div>
                                    <div class="col-12 col-md-9">
                                        <img class="rounded-circle" src="../view/imgsp/<?php echo $data["hinh"]?>" width="50px">
                                        
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID sản phẩm</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $data["sp_id"]?>" id="txt_masp" name="txt_masp" readonly class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $data["ten_sp"]?>" id="txt_tensp" name="txt_tensp"  class="form-control"></div>
                                </div>
                               
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá</label></div>
                                    <div class="col-12 col-md-9"><input type="text" value="<?php echo $data["gia_sp"]?>" id="txt_gia" name="txt_gia" class="form-control"></div>
                                </div>
                                                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng :</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="<?php echo $data["soluong"]?>" id="txt_sl" name="txt_sl" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả :</label></div>
                                    <div class="col-12 col-md-9">
                                        <textarea type="text" id="txt_mota" name="txt_mota" class="form-control"><?php echo $data["mota"]?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ :</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="<?php echo $data["dchi"]?>" id="txt_dchi" name="txt_dchi" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" name="sp_group_action" value="sp_edit" class="btn btn-primary">
                                    <i class="fa fa-dot-circle-o"></i> Sửa
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <?php include '../view/layout/footeradmin.php'; ?>

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <?php include '../view/layout/scriptadmin.php'; ?>
       

    </body>
</html>
