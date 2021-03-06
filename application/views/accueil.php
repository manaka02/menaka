<div class="section">
    <div class="video-bg">
        <div class="bg-landing">
            <h1>Bienvenue à AndroidLand</h1>
            <p class="gg-landing-desc">
                Revivez les forts et moments inédits passés de notre monde dans toute sa splendeur. <br>
                <strong>"Revivre une histoire, revivre une vie"</strong>

                <div class="gg-title gg-title-reservation">
                    <div class="gg-wiered-border">
                        <div class="gg-box-title">
                            <h2>Je plannifie déjà mon séjour</h2>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/tour-icon1.png') ?>" alt="Illustration titre découvrir">
                </div>
            </p>
        </div>
        <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
<!--           WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<!--            <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">-->
            <source src="<?= base_url('assets/video/video.mp4')?>" type="video/mp4">
        </video>
    </div>
</div>
<div class="section">
    <div class="price-tag">
        <div class="pricing">
            <div class="[ price-option price-option--low ]">
                <div class="price-option__detail">
                    <span class="price-option__cost"><?php echo $tarifs[0]->montant; ?> $</span>
                    <span class="price-option__type"><?php echo $tarifs[0]->designation; ?></span>
                    <img src="<?php echo base_url(); ?>assets/img/tiketbleu.png" alt="">
                </div>
                <a href="<?= base_url('accueil/Preparer')?>"" class="price-option__purchase">Réserver</a>
            </div>
            <div class="[ price-option price-option--mid ]">
                <div class="price-option__detail">
                    <span class="price-option__cost"><?php echo $tarifs[1]->montant; ?> $</span>
                    <span class="price-option__type"><?php echo $tarifs[1]->designation; ?></span>
                    <img src="<?php echo base_url(); ?>assets/img/tiketjaune.png" alt="">
                </div>
                <a href="<?= base_url('accueil/Preparer')?>"" class="price-option__purchase">Réserver</a>
            </div>
            <div class="[ price-option price-option--high ]">
                <div class="price-option__detail">
                    <span class="price-option__cost"><?php echo $tarifs[2]->montant; ?> $</span>
                    <span class="price-option__type"><?php echo $tarifs[2]->designation; ?></span>
                    <img src="<?php echo base_url(); ?>assets/img/tiketrouge.png" alt="">
                </div>
                <a href="<?= base_url('accueil/Preparer')?>"" class="price-option__purchase">Réserver</a>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="gg-attraction">
        <div class="gg-title">
            <div class="gg-wiered-border">
                <div class="gg-box-title">
                    <h2>Découvrir nos Univers</h2>
                    <p class="gg-subtitle">
                        Venez découvrir des sensations inoubliables
                    </p>
                </div>
            </div>
            <img src="<?= base_url('assets/img/tour-icon1.png') ?>" alt="Illustration titre découvrir">
        </div>
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="gg-box gg-mg">
                    <div class="gg-btn">
                        <a href="<?= base_url('details/GasyRoyalty')?>" class="gg-btn btn btn-primary btn-lg">
                            Découvrir
                        </a>
                    </div>
                    <div class="gg-description">
                        Royauté Malagasy
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="gg-box gg-primal">
                    <div class="gg-btn">
                        <a href="<?= base_url('details/PreHistory')?>" class="gg-btn btn btn-primary btn-lg">
                            Découvrir
                        </a>
                    </div>
                    <div class="gg-description">
                        Parc préhistorique
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="gg-box gg-guerre">
                    <div class="gg-btn">
                        <a href="<?= base_url('Accueil/NosUnivers/WorldWarII')?>" class="gg-btn btn btn-primary btn-lg">
                            Découvrir
                        </a>
                    </div>
                    <div class="gg-description">
                        Guerre Mondiale
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gg-attraction gg-album">
        <div class="gg-title">
            <div class="gg-wiered-border">
                <div class="gg-box-title">
                    <h2>Rien de mieux que des photos</h2>
                    <p class="gg-subtitle">
                        Pour vous faire rêver
                    </p>
                </div>
            </div>
            <img src="<?= base_url('assets/img/tour-icon1.png') ?>" alt="Illustration titre découvrir">
        </div>
        <div class="gg-album-container">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="<?php echo base_url(); ?>assets/images/details/fille-primal.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Préhistoire
                                    </div>
                                    <div class="project-name">
                                        Devenez une guerrière digne de ce nom
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="col-sm-12">
                            <a href="#" class="portfolio-box">
                                <img src="<?php echo base_url(); ?>assets/img/landscape-prehistoric.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Terre ancien
                                        </div>
                                        <div class="project-name">
                                            Survivre est la priorité
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="#" class="portfolio-box">
                                <img src="<?php echo base_url(); ?>assets/img/landscape-gasy.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Terre Malgache
                                        </div>
                                        <div class="project-name">
                                            L'union fait la force
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="#" class="portfolio-box">
                                <img src="<?php echo base_url(); ?>assets/img/landscape-war2.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Terre en conflit
                                        </div>
                                        <div class="project-name">
                                            Seule la victoire qui compte
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="<?php echo base_url(); ?>assets/img/miaramila-gasy.png" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Epôque Royale
                                    </div>
                                    <div class="project-name">
                                        Arriveriez-vous à défendre votre royaume des envahisseurs
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>