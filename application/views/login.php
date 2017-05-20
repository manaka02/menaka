<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <![endif]-->
</head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Admin</b> Tsakitsaky</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">

        <p class="login-box-msg">Connectez-vous</p>
        <?php if(isset($_GET["erreur"])){ ?>
        <div class="well"><p><?php echo $_GET["erreur"] ?></p></div>
        <?php } ?>

        <?php echo form_open(base_url().'/Utilisateur',array('method'=>'post'));?>
          <div class="form-group has-feedback">
            <input type="text" name="mail" class="form-control" placeholder="Adresse email" value="<?php echo set_value('mail'); ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <?php echo form_error('mail'); ?>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Mot de Passe" value="<?php echo set_value('pass'); ?>" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php echo form_error('pass'); ?>
            <?php if (isset($error)){
              echo "<p>$error</p>";
            } ?>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
            </div><!-- /.col -->
          </div>
        <?php echo form_close(); ?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

  </body>
</html>