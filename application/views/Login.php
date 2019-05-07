<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo site_url('Controle/user_login')?>" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        
        <div class="login-wrap">
          <input type="text" class="form-control" name="user" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" name="mdp" placeholder="Password">
          <br>
          <input type="submit" class="btn btn-theme btn-block" value="sign" name="sign" type="submit">
          <input type="submit" class="btn btn-theme btn-block" value="login" name="sign" type="submit">
          <hr>
          
        </div>
        <!-- Modal -->
      
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>/assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?php echo base_url(); ?>/assets/images/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
