

<!DOCTYPE HTML>
<html>
<head>

    <title>BookStore - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/admin/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/admin/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url(); ?>assets/css/admin/lines.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/admin/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="<?php echo base_url(); ?>assets/css/admin/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/admin/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/admin/d3.v3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin/rickshaw.js"></script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>Admin">AndroidLand - Admin</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Messages</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li class="avatar">
                        <a href="#">
                            <img src="images/1.png" alt=""/>
                            <div>New message</div>
                            <small>1 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="#">
                            <img src="images/2.png" alt=""/>
                            <div>New message</div>
                            <small>1 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>

                    <li class="dropdown-menu-footer text-center">
                        <a href="#">View all messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="webroot/images/1.png"><span class="badge">9</span></a>
                <ul class="dropdown-menu">
                    <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>

                    <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>

                    <li class="m_2"><a href="index.php/Login/logout"><i class="fa fa-lock"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-right">
            <input type="text" class="form-control" value="Rechercher..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Rechercher...';}">
        </form>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>Admin"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-envelope nav_icon"></i>Etat<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin">Ticket</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/tarif">Tarif</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/utilisateur">Utilisateur</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/monde">Monde</a>
                            </li>


                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $number['ticket']; ?></strong></h5>
                      <span>Billets vendus</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $number['user']; ?></strong></h5>
                      <span>Clients</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $number['monde']; ?></strong></h5>
                      <span>Mondes</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $number['vote']; ?></strong></h5>
                      <span>Votes</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      <div class="col-sm-12" style="background-color: white;">



            <div class="row col-sm-12">

                <?php
                foreach($output['css_files'] as $file): ?>
                    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
                <?php endforeach; ?>
                <?php foreach($output['js_files'] as $file): ?>
                    <script src="<?php echo $file; ?>"></script>
                <?php endforeach; ?>
                </head>


                <div>
                    <!-- <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
                    <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
                    <a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
                    <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
                    <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
                    <a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
                    <a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a> -->
                    <h1 class="page-header">Liste des <?php echo $name; ?> sauvegardées :</h1>
                </div>
                <div style='height:20px;'></div>
                <div>
                    <?php echo $output['output']; ?>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>




<!--            ***************************************fooooooter**************************-->
       <div class="clearfix"> </div>
            <div class="span_11">
                <div class="col-md-6 col_4">
                    <!-- <link rel="stylesheet" href="css/clndr.css" type="text/css" /> -->
                    <script src="<?php echo base_url(); ?>assets/js/admin/underscore-min.js" type="text/javascript"></script>
                    <script src= "<?php echo base_url(); ?>assets/js/admin/moment-2.2.1.js" type="text/javascript"></script>
                    <script src="<?php echo base_url(); ?>assets/js/admin/clndr.js" type="text/javascript"></script>
                    <script src="<?php echo base_url(); ?>assets/js/admin/site.js" type="text/javascript"></script>
                    <!----End Calender -------->
                </div>
            </div>
            <!-- /#wrapper -->
            <!-- Bootstrap Core JavaScript -->
            <link href="<?php echo base_url(); ?>assets/css/admin/jqvmap.css" rel='stylesheet' type='text/css' />
            <script src="<?php echo base_url(); ?>assets/js/admin/jquery.vmap.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/admin/jquery.vmap.sampledata.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/js/admin/jquery.vmap.world.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('#vmap').vectorMap({
                        map: 'world_en',
                        backgroundColor: '#333333',
                        color: '#ffffff',
                        hoverOpacity: 0.7,
                        selectedColor: '#666666',
                        enableZoom: true,
                        showTooltip: true,
                        values: sample_data,
                        scaleColors: ['#C8EEFF', '#006491'],
                        normalizeFunction: 'polynomial'
                    });
                });
            </script>
            <!-- <script src="webroot/js/admin/jquery.min.js"></script> -->
            <script src="<?php echo base_url(); ?>assets/js/admin/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/admin/parsley.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/admin/jspdf.min.js"></script>


      </div>
       <div class="clearfix"> </div>
            </div>
</body>
</html>


    
	  
