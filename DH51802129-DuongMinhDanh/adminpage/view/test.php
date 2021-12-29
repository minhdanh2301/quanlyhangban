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

        <?php include '../view/layout/menuleft.php'; ?><!-- /#left-panel -->

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
                                    <h1><a href="../view/themsp.php" class="btn btn-success"><i class="fa fa-edit">Thêm mới</i></a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li class="active">Danh sách sản phẩm</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Danh sách sản phẩm</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Ảnh</th>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            include_once '../controller/sanphamController.php';
                                            $sp = new sanpham("", "", "", "","","","");
                                            $spController = new sanphamController("");
                                            $data = $spController->getAllSp($sp);
                                            for ($i = 0; $i < count($data); $i++) {

                                                echo ' <tr>';
                                                echo ' <td><img src="../view/imgsp/' . $data[$i]["hinh"] . '" width = "50px" /></td>';
                                                echo ' <td>' . $data[$i]["sp_id"] . '</td>';
                                                echo ' <td>' . $data[$i]["ten_sp"] . '</td>';
                                                echo ' <td>' . $data[$i]["gia_sp"] . '</td>';

                                                echo ' <td>';
                                                echo ' <a href="../controller/sanphamController.php?action=edit&id='.$data[$i]["sp_id"].'" name="sp_group_action" class="btn btn-success" ><i class="fa fa-edit"></i></a> ';
                                                echo ' <a href="../controller/sanphamController.php?action=xem&id='.$data[$i]["sp_id"].'" name="sp_group_action" class="btn btn-success" ><i class="fa fa-eye"></i></a> ';
                                                echo ' <a href="../controller/sanphamController.php?action=delete&id='.$data[$i]["sp_id"].'" class="btn btn-danger" ><i class="fa fa-times"></i></a>';
                                                echo ' </td>';
                                                echo ' </tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


            <div class="clearfix"></div>

            <?php include '../view/layout/footeradmin.php'; ?>

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <?php include '../view/layout/scriptadmin.php'; ?>

    </body>
</html>
