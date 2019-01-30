<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html> 
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="M-Okapi">
    <title>M-Okapi</title>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ;?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url("assets/css/general.css");?>" rel="stylesheet">
    
     <!-- Owl-Carousel -->
    <link href="<?php echo base_url("assets/css/custom.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/owl.carousel.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/owl.theme.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/animate.css");?>" rel="stylesheet">
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css");?>"> 
    
    <script src="<?php echo base_url("assets/js/modernizr-2.8.3.min.js");?>"></script>  <!-- Modernizr /-->
    

</head>

<body id="home">
    <div  class="content-section-c ">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col text-center white">
                <div id="owl-demo-1" class="owl-carousel">
                        <a href="<?php echo base_url("assets/img/iphone.png");?>" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="<?php echo base_url("assets/img/iphone.png");?>" alt="">
                            </div>
                        </a>
                        <a href="<?php echo base_url("assets/img/doge.png");?>" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="<?php echo base_url("assets/img/doge.png");?>" alt="">
                            </div>
                        </a>
                        <a href="<?php echo base_url("assets/img/ipad.png");?>" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="<?php echo base_url("assets/img/ipad.png");?>" alt="">
                            </div>
                        </a>
                    </div>       
             </div>
            <div class="col-md-6 text-center">
                <div class="mockup-content">
                        <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                            <button type="button "><span>Connexion</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">Connexion</h2>
                                        <form method="post" action="<?php echo site_url('utilisateur/connexion')?>">
                                            <p><label>Login</label><input type="text" name="login"/></p>
                                            <p><label>Mot de passe</label><input  type="password" name="mdp"/></p>
                                            <p style="color: red;"><?php
                                                echo $this->session->erreur;
                                                ?></p>
                                            <input type="submit" value="connexion">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                            <a href="<?php echo site_url('utilisateur/form_authentification');?>"><button type="button "><span>Connexion</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">S'inscrire</h2>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                </div>
            </div>  
            </div>>
        </div>
    </div>  
    
    
    <script src="<?php echo base_url("assets/js/jquery-1.10.2.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
    <script src="<?php echo base_url("assets/js/owl.carousel.js");?>"></script>
    <script src="<?php echo base_url("assets/js/script.js");?>"></script>
    <!-- StikyMenu -->
    <script src="<?php echo base_url("assets/js/stickUp.min.js");?>"></script>
    <script type="text/javascript">
      jQuery(function($) {
        $(document).ready( function() {
          $('.navbar-default').stickUp();
          
        });
      });
    
    </script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.corner.js");?>"></script> 
    <script src="<?php echo base_url("assets/js/wow.min.js");?>"></script>
    <script>
     new WOW().init();
    </script>
    <script src="<?php echo base_url("assets/js/classie.js");?>"></script>
    <script src="<?php echo base_url("assets/js/uiMorphingButton_inflow.js");?>"></script>
    <!-- Magnific Popup core JS file -->
    <script src="<?php echo base_url("assets/js/jquery.magnific-popup.js");?>"></script> 
</body>

</html>
