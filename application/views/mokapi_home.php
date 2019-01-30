

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
                            <a href="<?php echo site_url('utilisateur/form_inscription');?>"><button type="button "><span>S'inscrire</span></button>
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
            </div>
        </div>
    </div>  
    
    
    
