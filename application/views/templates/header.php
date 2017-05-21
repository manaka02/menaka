<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" type="text/css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>" type="text/css">

    <!--Custom Css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/w3.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/gg-style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/mike.css')?>">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll gg-logo" href="<?= base_url('accueil')?>">
                <img src="<?= base_url('assets/img/logo-AL.png')?>" alt="logolayana">
                <p><span>Androïd</span>Land</p>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse gg-nav" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="gg-menu" href="<?= base_url('accueil/NosUnivers')?>">Nos Univers</a>
                </li>
                <li>
                    <a class="gg-menu" href="<?= base_url('accueil/Preparer')?>">Preparer votre séjour</a>
                </li>
                <li>
                    <a class="gg-menu" href="<?= base_url('accueil/NouveauMonde')?>">Proposer votre univers</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<?php if(isset($titre)){?>
<nav class="navbar navbar-default">
    <div class="gg-ariane">
        <a href="<?= base_url('accueil')?>">Accueil</a> > <a href="<?= current_url()?>"><?=$titre?></a>
    </div>
</nav>
<?php }?>
