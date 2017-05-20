<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css" type="text/css">


<!-- Section About
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <div class="row" id="login">
                    <div class="col-md-6">
                        <h2 class="section-heading">CONNECTEZ-VOUS!</b></h2>
                        <hr>
                        <p>
                            Vous n'avez pas encore un compte?
                            <a href="#inscription" class="">Inscrivez-vous !</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="regularform">
                            <p class="login-box-msg"></p>
                            <?php if(isset($_GET["erreur"])){ ?>
                                <div class="well"><p><?php echo $_GET["erreur"] ?></p></div>
                            <?php } ?>
                            <?php echo form_open(base_url().'/Utilisateur',array('method'=>'post','class'=>'text-left','id'=>'contactform'));?>
                                <div class="form-group">
                                    <input type="text" name="mail" class="col-md-12" placeholder="Adresse email" value="<?php echo set_value('mail'); ?>" required>
                                    <?php echo form_error('mail'); ?>
                                </div>

                                <input type="password" name="pass" class="col-md-12" placeholder="Mot de Passe" value="<?php echo set_value('pass'); ?>" required>
                                <?php echo form_error('pass'); ?>
                                <?php if (isset($error)){
                                    echo "<p>$error</p>";
                                } ?>

                                <input type="submit" id="submit_log" class="contact submit btn btn-primary btn-xl" value="Je me connecte">
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <hr>
                <br><br>



                <div class="row" id="inscription">
                    <div class="col-md-6">
                        <div class="regularform">
                            <p class="login-box-msg"></p>
                            <?php if(isset($_GET["erreur"])){ ?>
                                <div class="well"><p><?php echo $_GET["erreur"] ?></p></div>
                            <?php } ?>
                            <?php echo form_open(base_url().'/Utilisateur/inscription'.$redirection,array('method'=>'post','class'=>'text-left','id'=>''));?>
                                <div class="form-group">
                                    <input type="text" name="nom_ins" class="col-md-12" placeholder="Votre nom" value="<?php echo set_value('nom_ins'); ?>" required>
                                    <?php echo form_error('nom_ins'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="prenom_ins" class="col-md-12" placeholder="Votre pr&eacute;" value="<?php echo set_value('nom_ins'); ?>" required>
                                    <?php echo form_error('prenom_ins'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="mail_ins" class="col-md-12" placeholder="Votre adresse email" value="<?php echo set_value('mail_ins'); ?>" required>
                                    <?php echo form_error('mail_ins'); ?>
                                </div>

                                <input type="password" name="pass_ins" class="col-md-12" placeholder="Votre mot de Passe" value="<?php echo set_value('pass_ins'); ?>" required>
                                <?php echo form_error('pass_ins'); ?>

                                <input type="password" name="confirm_pass" class="col-md-12" placeholder="Confirmer votre mot de Passe" value="<?php echo set_value('confirm_pass'); ?>" required>
                                <?php echo form_error('confirm_pass'); ?>

                                <?php if (isset($error)){
                                    echo "<p>$error</p>";
                                } ?>

                                <input type="submit" id="submit_ins" class="contact submit btn btn-primary btn-xl" value="Je me connecte">
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="section-heading">INSCRIVEZ-VOUS!</b></h2>
                        <hr>
                        <p>
                            Avec un compte Androidland, vous pourriez profiter des fonctionnalités du site: <b>acheter des billets, réserver un séjour, faire des suggestions de monde,...</b>
                            <br> N'hesitez plus! Inscrivez-vous maintenant !
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Team
================================================== -->

<div class="clearfix">
</div>
<!-- Section About
================================================== -->


<script src="<?= base_url('assets/js/jquery.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url() ?>assets/js/angular.min.js"></script>
<script src="<?= base_url() ?>assets/js/parallax.js"></script>
<script src="<?= base_url() ?>assets/js/contact.js"></script>
<script src="<?= base_url() ?>assets/js/countto.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/common.js"></script>