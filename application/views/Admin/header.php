<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $store->project_name."-".$pagetitle; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url();?>swal2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url();?>swal2/sweetalert2.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
        <link href="<?php echo base_url(); ?>DataTables/datatables.min.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 


        <script rel="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            .profile{

            }
        </style>
    </head>

    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="hold-transition skin-blue fixed sidebar-mini" ng-app="">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url('Admin/index'); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>VSG</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><?php echo $store->project_name; ?></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $datax->name; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $datax->name; ?> - Web Developer
                                            <small>Member since - <?php echo $datax->cdate; ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('Admin/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <?php if ($this->session->userdata('id') && $this->session->userdata('project_id')): ?>
                                                <a href="<?php echo base_url('Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $datax->name; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?php echo base_url('Admin/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li><a href="<?php echo base_url('Admin/company_config'); ?>"><i class="fa fa-circle-o"></i> Manage Company Details</a></li>
                                <li><a href="<?php echo base_url('Admin/change_password'); ?>"><i class="fa fa-circle-o"></i> Change Password </a></li>
                                <li><a href="<?php echo base_url('Login/logout'); ?>"><i class="fa fa-circle-o"></i> Logout</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-id-card"></i>
                                <span>Employee</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Admin/listEmployee'); ?>"><i class="fa fa-circle-o"></i> List Employee</a></li>
                                <li><a href="<?php echo base_url('Admin/addEmployee'); ?>"><i class="fa fa-circle-o"></i> Add Employee</a></li>
                                <li><a href="<?php echo base_url('Admin/salary'); ?>"><i class="fa fa-circle-o"></i> Salary </a></li>
                                <li><a href="<?php echo base_url('Admin/employeeReport'); ?>"><i class="fa fa-circle-o"></i> Employee Reports</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Client</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Admin/listClient'); ?>"><i class="fa fa-circle-o"></i> View Clients</a></li>
                                <li><a href="<?php echo base_url('Admin/addClient'); ?>"><i class="fa fa-circle-o"></i> Add Client</a></li>
                                <li><a href="<?php echo base_url('Admin/manageClient'); ?>"><i class="fa fa-circle-o"></i> Manage Client</a></li>
                                <li><a href="<?php echo base_url('Admin/assignManpower'); ?>"><i class="fa fa-circle-o"></i> Assign Manpower</a></li>
                                <li><a href="<?php echo base_url('Admin/clientReport'); ?>"><i class="fa fa-circle-o"></i> Client Report</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Invoice</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Admin/gstInvoice'); ?>"><i class="fa fa-circle-o"></i> GST Invoice</a></li>
                                <li><a href="<?php echo base_url('Admin/nonGstInvoice'); ?>"><i class="fa fa-circle-o"></i> Non GST Invoice</a></li>
                                <li><a href="<?php echo base_url('Admin/invoiceReport'); ?>"><i class="fa fa-circle-o"></i> Invoice Report</a></li>
                            </ul>
                        </li>
                        <?php if ($this->session->userdata('id') && $this->session->userdata('project_id')): ?>
                            <li>
                                <a href="<?php echo base_url('Login/logout'); ?>">
                                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>