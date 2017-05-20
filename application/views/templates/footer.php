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

<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="bottombrand wow flipInX">Layana</h1>
                <p>
                    &copy; 2016 Bootstrap HTML Template by WowThemes.net
                </p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>