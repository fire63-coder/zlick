<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/on-off-switch.css')}}"/>
    <link rel="stylesheet" href="{{asset('backend/css/summernote.css')}}">
    <link rel="stylesheet" href="style.css')}}">
</head>
<body class="hold-transition fixed skin-blue sidebar-mini">
<div class="wrapper">
    <!-- start header  -->
    <header class="main-header">
        <a href="index.php" class="logo">
            <span class="logo-lg">eCommerce PHP</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>
            <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('backend/uploads/user-1.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Administrator</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <div>
                                    <a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
                                </div>
                                <div>
                                    <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header  -->
    <!-- start Side Bar to Manage Shop Activities -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="settings.php">
                        <i class="fa fa-sliders"></i> <span>Website Settings</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span>Shop Settings</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="size.php"><i class="fa fa-circle-o"></i> Size</a></li>
                        <li><a href="color.php"><i class="fa fa-circle-o"></i> Color</a></li>
                        <li><a href="country.php"><i class="fa fa-circle-o"></i> Country</a></li>
                        <li><a href="shipping-cost.php"><i class="fa fa-circle-o"></i> Shipping Cost</a></li>
                        <li><a href="top-category.php"><i class="fa fa-circle-o"></i> Top Level Category</a></li>
                        <li><a href="mid-category.php"><i class="fa fa-circle-o"></i> Mid Level Category</a></li>
                        <li><a href="end-category.php"><i class="fa fa-circle-o"></i> End Level Category</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href="product.php">
                        <i class="fa fa-shopping-bag"></i> <span>Product Management</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="order.php">
                        <i class="fa fa-sticky-note"></i> <span>Order Management</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="slider.php">
                        <i class="fa fa-picture-o"></i> <span>Manage Sliders</span>
                    </a>
                </li>
                <!-- Icons to be displayed on Shop -->
                <li class="treeview ">
                    <a href="service.php">
                        <i class="fa fa-list-ol"></i> <span>Services</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="faq.php">
                        <i class="fa fa-question-circle"></i> <span>FAQ</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="customer.php">
                        <i class="fa fa-user-plus"></i> <span>Registered Customer</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="page.php">
                        <i class="fa fa-tasks"></i> <span>Page Settings</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="social-media.php">
                        <i class="fa fa-globe"></i> <span>Social Media</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="subscriber.php">
                        <i class="fa fa-hand-o-right"></i> <span>Subscriber</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <!-- end  Side Bar to Manage Shop Activities -->
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-android-cart"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Pending Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-clipboard"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>4</h3>
                            <p>Completed Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-android-checkbox-outline"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Completed Shipping</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-checkmark-circled"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Pending Shippings</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-load-a"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>10</h3>
                            <p>Active Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-person-stalker"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>6</h3>
                            <p>Subscriber</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>4</h3>
                            <p>Available Shippings</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-location"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-olive">
                        <div class="inner">
                            <h3>5</h3>
                            <p>Top Categories</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-arrow-up-b"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>15</h3>
                            <p>Mid Categories</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-android-menu"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>78</h3>
                            <p>End Categories</p>
                        </div>
                        <div class="icon">
                            <i class="ionicons ion-arrow-down-b"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end content -->
</div>
<script src="{{asset('backend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/select2.full.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.inputmask.js')}}"></script>
<script src="{{asset('backend/js/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('backend/js/jquery.inputmask.extensions.js')}}"></script>
<script src="{{asset('backend/js/moment.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('backend/js/icheck.min.js')}}"></script>
<script src="{{asset('backend/js/fastclick.js')}}"></script>
<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('backend/js/app.min.js')}}"></script>
<script src="{{asset('backend/js/jscolor.js')}}"></script>
<script src="{{asset('backend/js/on-off-switch.js')}}"></script>
<script src="{{asset('backend/js/on-off-switch-onload.js')}}"></script>
<script src="{{asset('backend/js/clipboard.min.js')}}"></script>
<script src="{{asset('backend/js/demo.js')}}"></script>
<script src="{{asset('backend/js/summernote.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#editor1').summernote({
            height: 300
        });
        $('#editor2').summernote({
            height: 300
        });
        $('#editor3').summernote({
            height: 300
        });
        $('#editor4').summernote({
            height: 300
        });
        $('#editor5').summernote({
            height: 300
        });
    });
    $(".top-cat").on('change',function(){
        var id=$(this).val();
        var dataString = 'id='+ id;
        $.ajax
        ({
            type: "POST",
            url: "get-mid-category.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $(".mid-cat").html(html);
            }
        });
    });
    $(".mid-cat").on('change',function(){
        var id=$(this).val();
        var dataString = 'id='+ id;
        $.ajax
        ({
            type: "POST",
            url: "get-end-category.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                $(".end-cat").html(html);
            }
        });
    });
</script>
<script>
    $(function () {

        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm-dd-yyyy", {"placeholder": "mm-dd-yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
        });

        $('#datepicker1').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            todayBtn: 'linked',
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });



        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

        $('#confirm-approve').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });

    });

    function confirmDelete()
    {
        return confirm("Are you sure want to delete this data?");
    }
    function confirmActive()
    {
        return confirm("Are you sure want to Active?");
    }
    function confirmInactive()
    {
        return confirm("Are you sure want to Inactive?");
    }

</script>
<script type="text/javascript">
    function showDiv(elem){
        if(elem.value == 0) {
            document.getElementById('photo_div').style.display = "none";
            document.getElementById('icon_div').style.display = "none";
        }
        if(elem.value == 1) {
            document.getElementById('photo_div').style.display = "block";
            document.getElementById('photo_div_existing').style.display = "block";
            document.getElementById('icon_div').style.display = "none";
        }
        if(elem.value == 2) {
            document.getElementById('photo_div').style.display = "none";
            document.getElementById('photo_div_existing').style.display = "none";
            document.getElementById('icon_div').style.display = "block";
        }
    }
    function showContentInputArea(elem){
        if(elem.value == 'Full Width Page Layout') {
            document.getElementById('showPageContent').style.display = "block";
        } else {
            document.getElementById('showPageContent').style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#btnAddNew").click(function () {

            var rowNumber = $("#ProductTable tbody tr").length;

            var trNew = "";

            var addLink = "<div class=\"upload-btn" + rowNumber + "\"><input type=\"file\" name=\"photo[]\"  style=\"margin-bottom:5px;\"></div>";

            var deleteRow = "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";

            trNew = trNew + "<tr> ";

            trNew += "<td>" + addLink + "</td>";
            trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";

            trNew = trNew + " </tr>";

            $("#ProductTable tbody").append(trNew);

        });

        $('#ProductTable').delegate('a.Delete', 'click', function () {
            $(this).parent().parent().fadeOut('slow').remove();
            return false;
        });

    });



    var items = [];
    for( i=1; i<=24; i++ ) {
        items[i] = document.getElementById("tabField"+i);
    }

    items[1].style.display = 'block';
    items[2].style.display = 'block';
    items[3].style.display = 'block';
    items[4].style.display = 'none';

    items[5].style.display = 'block';
    items[6].style.display = 'block';
    items[7].style.display = 'block';
    items[8].style.display = 'none';

    items[9].style.display = 'block';
    items[10].style.display = 'block';
    items[11].style.display = 'block';
    items[12].style.display = 'none';

    items[13].style.display = 'block';
    items[14].style.display = 'block';
    items[15].style.display = 'block';
    items[16].style.display = 'none';

    items[17].style.display = 'block';
    items[18].style.display = 'block';
    items[19].style.display = 'block';
    items[20].style.display = 'none';

    items[21].style.display = 'block';
    items[22].style.display = 'block';
    items[23].style.display = 'block';
    items[24].style.display = 'none';

    function funcTab1(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[1].style.display = 'block';
            items[2].style.display = 'block';
            items[3].style.display = 'block';
            items[4].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[1].style.display = 'none';
            items[2].style.display = 'none';
            items[3].style.display = 'none';
            items[4].style.display = 'block';
        }
    };

    function funcTab2(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[5].style.display = 'block';
            items[6].style.display = 'block';
            items[7].style.display = 'block';
            items[8].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[5].style.display = 'none';
            items[6].style.display = 'none';
            items[7].style.display = 'none';
            items[8].style.display = 'block';
        }
    };

    function funcTab3(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[9].style.display = 'block';
            items[10].style.display = 'block';
            items[11].style.display = 'block';
            items[12].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[9].style.display = 'none';
            items[10].style.display = 'none';
            items[11].style.display = 'none';
            items[12].style.display = 'block';
        }
    };

    function funcTab4(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[13].style.display = 'block';
            items[14].style.display = 'block';
            items[15].style.display = 'block';
            items[16].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[13].style.display = 'none';
            items[14].style.display = 'none';
            items[15].style.display = 'none';
            items[16].style.display = 'block';
        }
    };

    function funcTab5(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[17].style.display = 'block';
            items[18].style.display = 'block';
            items[19].style.display = 'block';
            items[20].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[17].style.display = 'none';
            items[18].style.display = 'none';
            items[19].style.display = 'none';
            items[20].style.display = 'block';
        }
    };

    function funcTab6(elem) {
        var txt = elem.value;
        if(txt == 'Image Advertisement') {
            items[21].style.display = 'block';
            items[22].style.display = 'block';
            items[23].style.display = 'block';
            items[24].style.display = 'none';
        }
        if(txt == 'Adsense Code') {
            items[21].style.display = 'none';
            items[22].style.display = 'none';
            items[23].style.display = 'none';
            items[24].style.display = 'block';
        }
    };




</script>
</body>
</html>
