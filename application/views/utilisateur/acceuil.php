<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
		    <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Bienvenue <?php echo $this->session->Nom ;?> je me nomme</h3>
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">M-Okapi</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Je facilte la gestion de ton budget</h3>
			<ul class="list-inline intro-social-buttons">
				<li><a href="#" class="btn  btn-lg mybutton_cyano wow fadeIn"><span class="network-name">Aide</span></a>
				</li>
				<li id="download" ><a href="<?php echo site_url('utilisateur/logout');?>" class="btn  btn-lg mybutton_cyano wow fadeIn"><span class="network-name">Deconnexion</span></a>
				</li>
			</ul>
		</div> 

        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="<?php echo base_url("assets/img/icon/circle.png");?>" alt=""> </a>
			</div>
		</div>
    </div>
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Exercice Budgetaire</h2><br>
				<p class="lead" style="margin-top:0">Est la periode de gestion d'un budget</p>
				
			</div>
			<div class="row tworow">
			
				<div class="col-sm-6  wow fadeInDown text-center">
				  <img class="rotate" src="<?php echo base_url("assets/img/icon/laptop.svg");?>" alt="Generic placeholder image">
				  <h3>Exercice existant</h3>
				  <p class="lead">ici vous pouvez voir les exercices bugetaires precedant ainsi que les depenses liees a ces derniers</p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div>
				<div class="col-sm-6 wow fadeInDown text-center">
				  <img  class="rotate" src="<?php echo base_url("assets/img/icon/browser.svg");?>" alt="Generic placeholder image">
				   <h3>Nouvel exercice</h3>
				 <p class="lead">ici vous avez la possibilite de creer un nouvel exrecice budgetaire</p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>
    <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="<?php echo base_url("assets/img/doge.png");?>" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Statistique General</h3>
                    <p class="lead">Ici se trouve le suivi des operations depuis vos debuts avec moi
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Bilan general</li>
					</ul>
				</div>           
            </div>
        </div>

    </div>