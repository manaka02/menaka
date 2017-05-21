<%-- 
    Document   : header
    Created on : 10 mai 2017, 10:26:58
    Author     : Toavina RALAMBOSOA
--%>
   
<!DOCTYPE HTML>
<html>
<head>
    <%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib uri="/struts-tags" prefix="s" %>
<title>BookStore - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="webroot/css/admin/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="webroot/css/admin/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="webroot/css/admin/lines.css" rel='stylesheet' type='text/css' />
<link href="webroot/css/admin/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="webroot/js/admin/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="webroot/css/admin/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="webroot/js/admin/metisMenu.min.js"></script>
<script src="webroot/js/admin/custom.js"></script>
<!-- Graph JavaScript -->
<script src="webroot/js/admin/d3.v3.js"></script>
<script src="webroot/js/admin/rickshaw.js"></script>
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
                <a class="navbar-brand" href="/index.php/Home">BookStore - Admin</a>
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
                            <a href="/index.php/Home"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
        
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>CRUD<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>      
                                    <s:url namespace="/" action="livreAdmin" var="livre"></s:url>
                                    <s:a href="%{livre}">Livres</s:a>
                                </li>
                                <li>      
                                    <s:url namespace="/" action="utilisateurAdmin" var="user"></s:url>
                                    <s:a href="%{user}">Utilisateurs</s:a>
                                </li>
                                <li>      
                                    <s:url namespace="/" action="categorieAdmin" var="categorie"></s:url>
                                    <s:a href="%{categorie}">Categories</s:a>
                                </li>
                                <li>      
                                    <s:url namespace="/" action="genreAdmin" var="genre"></s:url>
                                    <s:a href="%{genre}">Genres</s:a>
                                </li>
                                <li>      
                                    
                                    <s:a href="auteurAdmin">Auteurs</s:a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Etat<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="index.php/Liste/montantrecu">Montant billet re�u</a>
                                </li>
                                <li>
                                    <a href="index.php/Liste/montantreste">Montant reste � pay�</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Ressource</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
