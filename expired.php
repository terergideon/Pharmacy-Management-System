<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Terer Gideon">
    <title>Regis Inventory & Monitoring System</title>
    <!--Bootstrap core css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--custom css-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Morris Charts CSS-->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">
    <!--Custom Fonts-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <!-- Navigation --> 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display--> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Regis Inventory and Monitoring System</a>
            </div>
            <!-- Top Menu Items--> 
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens --> 
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav"> 
                    <li class="active">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    </li>
                    <li>
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Item List</a>
                    </li>
                    <li>
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Product Profile</a>
                    </li>
                    <li>
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Expired</a>
                    </li>
                    <li>
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Sales</a>
                    </li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
</nav>

        <div id="page-wrapper">
            <div class="container-fluid">

        <!-- page heading-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
            </div>
        </div>
        <!--/.row-->
        <div id="all-expired"></div>

        </div>
        <!-- /.container-fluid--> 

        </div>
        <!-- /.page wrapper --> 

    </div>
    <!-- /.wrapper-->
       
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/regis.js"></script>

</body>

</html>
