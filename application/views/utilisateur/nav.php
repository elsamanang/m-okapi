<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">M-Okapi</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="<?php echo site_url('utilisateur/acceuil');?>">Acceuil</a></li>
					<li class="menuItem"><a href="#">Aide</a></li>
					<li class="menuItem"><a href="<?php echo site_url('utilisateur/logout');?>">Deconnexion</a></li>
				</ul>
			</div>
		   
		</div>
	</nav>