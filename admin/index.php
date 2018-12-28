<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

</head>
<body>
<?php
        include __DIR__ .'/includes/header.php';
        
    ?>
<?php
        session_start();
        if(!isset($_SESSION['login_us']))
            header("location:login.php");
      ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                    include __DIR__ ."/includes/connect.php";
                    include __DIR__ .'/includes/sidebar.php';
                ?>
            </div>
                <?php
                if(isset($_REQUEST['page']))
                {
                   $page=$_REQUEST['page'];
                   switch ($page)
                    {
                        case "dsdm":
                            include "function/danhsachdm.php";
                            break;
                        case "dssp":
                            include "function/danhsachsp.php";
                            break;
                        case "dsdh":
                            break;
                        case "themdm":
                            include "function/themdm.php";
                            break;
                        case "suadm":
                            include "function/suadm.php";
                            break;
                        case "xoadm":
                            include "function/xoadm.php";
                            break;
                        case "themsp":
                            include 'function/themsp.php';
                            break;
                        case "xoasp":
                            include "function/xoasp.php";
                        case "suasp":
                            include "function/suasp.php";
                            break;
                        case 'order':
                            include "function/order.php";
                            break;
                        case 'order_dt':
                            include "function/order_dt.php";
                            break;
                        case 'themtintuc';
                            include "function/themtintuc.php";
                            break;
                        case 'xoatt';
                            include "function/xoatintuc.php";
                            break;
                        case 'suatintuc';
                            include "function/suatintuc.php";
                            break;
                        case 'dstintuc';
                            include "function/danhsachtintuc.php";
                            break;
                        case 'logout';
                            include "function/logout.php";
                                break;
                        case 'order';
                            include "cms/order.php";
                            break;
                        case 'orderdt';
                            include "function/orderdt.php";
                            break;
                        case 'orderkh';
                            include "function/orderkh.php";
                            break;
                        case 'tinnhan';
                            include "function/tinnhan.php";
                            break;
                        case 'thanhvien';
                            include "function/thanhvien.php";
                            break;
                    
                    }
                
                }
                else include "function/center.php";
               ?>
           
            
        </div>
    </div>
                            <!--/.container-->
</div>
                        <!--/.wrapper-->

         <!-- <?php
            // include __DIR__.'/includes/footer.php';
         ?> -->
   <script src="../cssjsadmin/ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="../cssjsadmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/common.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
</html>