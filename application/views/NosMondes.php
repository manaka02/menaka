<link href="<?php echo base_url(); ?>assets/css/antsa/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/antsa/antsa.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/antsa/lightGallery.css" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/antsa/font-awesome.css" rel="stylesheet">

<div class="gg-bg">
    <div class="services gg-head" id="services">
        <div class="services-agile-w3l">
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="gg-illustration">
        <img src="<?php echo base_url(); ?>assets/images/man-costume.png" alt="directeur-general-androidland">
    </div>

    <div class="about" id="about">

            <div class="agileits_banner_bottom_grids">
                <div class="container">
                <div class="col-md-12 agileits_banner_bottom_grid_l">
                    <div class="agileits_about_left">
                        <h3 class="w3l_head">Bienvenue à Androidland</h3>
                        <p class="w3ls_head_para">Un monde à part</p>
                    </div>
                    <p><i>Je suis le Professeur Antsa Rakotomananjo, diplomé en études robotiques et sciences humaines</i>
                        Cela fait des centaines d'années que le monde désire de voir des robots pouvant agir comme des hommes, des robots
                        semblables aux êtres humains.<br>
                        J'ai commencé, 20 ans de cela, mes recherches sur la robotique qui m'ont permis d'aboutir aux résultats qu'on peut
                        constater aujourdui. Je vous présente ainsi, le fruit de ces années en laboratoire : <strong><i>Android Land</i></strong><br>
                        Android Land est l'unique parc au monde où vous ne rencontrerez que des Robots qui recréent en grandeur nature ces fabuleuses époques
                        pensées être perdus dans le temps.<br>
                        Suivez mes robots-chefs, Ils vous guideront dans leurs ères respectives.
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

<!--    <div class="section">-->
        <div class="services gg-service-image" id="services" style="">
            <h3 class="w3l_head w3l_head1">World War IIs</h3>
            <p class="w3ls_head_para w3ls_head_para1">Visitez !</p>
            <div class="services-agile-w3l">
                <div class="clearfix"> </div>
            </div>

        </div>

    <div class="w3-card w3-white gg-card-war gg-attraction">
        <div class="container-fluid">
            <div class="row agileits_banner_bottom_grid_l" style="text-align: center">
                <h4>VIVEZ LA SECONDE GUERRE MONDIALE !</h4>
                <p>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                        Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.
                </p>
                <a href="<?= base_url('details/GasyRoyalty')?>" class="btn btn-primary btn-lg">J'ai envie de visiter</a>
                <div class="w3-container w3-center">

                </div>
            </div>
        </div>
    </div>

    <!--    <div class="section">-->
    <div class="services gg-service-image2" id="services" style="">
        <h3 class="w3l_head w3l_head1">Word War II</h3>
        <p class="w3ls_head_para w3ls_head_para1">Visitez !</p>
        <div class="services-agile-w3l">
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="w3-card w3-white gg-card-prehistoire">
        <div class="container-fluid">
            <div class="row agileits_banner_bottom_grid_l" style="text-align: center">
                <h4>VIVEZ LA SECONDE GUERRE MONDIALE !</h4>
                <p>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                    Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.
                </p>
                <a href="<?= base_url('details/WorldWarII')?>" class="btn btn-primary btn-lg">J'ai envie de visiter</a>
                <div class="w3-container w3-center">

                </div>
            </div>
        </div>
    </div>
    <!--    <div class="section">-->
    <div class="services gg-service-image" id="services" style="">
        <h3 class="w3l_head w3l_head1">Word War II</h3>
        <p class="w3ls_head_para w3ls_head_para1">Visitez !</p>
        <div class="services-agile-w3l">
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="w3-card w3-white gg-card-madagascar">
        <div class="container-fluid">
            <div class="row agileits_banner_bottom_grid_l" style="text-align: center">
                <h4>VIVEZ L'HISTOIRE DE MADAGASCAR !</h4>
                <p>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                    Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.
                </p>
                <a href="<?= base_url('details/Prehistory')?>" class="btn btn-primary btn-lg">J'ai envie de visiter</a>
                <div class="w3-container w3-center">

                </div>
            </div>
        </div>
    </div>
<!--    </div>-->
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/antsa/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/antsa/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/antsa/easing.js"></script>
<script src="<?php echo base_url(); ?>assets/js/antsa/lightGallery.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/antsa/owl.carousel.js"></script>
<link href="<?php echo base_url(); ?>assets/css/antsa/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/antsa/owl.carousel.css" type="text/css" media="all">
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 4,
            itemsDesktop : [640,5],
            itemsDesktopSmall : [414,4]

        });

    });
</script>