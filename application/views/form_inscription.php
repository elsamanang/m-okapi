
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
                            <button type="button "><span>Creation</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">Creation</h2>
                                        <form method="post" action="<?php echo site_url('utilisateur/nouvel_utilisateur')?>">
                                            <p><label>Nom complet</label><input type="text" name="nomcomplet"></p>
                                            <p><label>Login</label><input type="text" name="login"/></p>
                                            <p><label>Mot de passe</label><input  type="password" name="mdp"/></p>
                                            <p><label>Confirmer</label><input  type="password" name="mdp_conf"/></p>
                                            <p><label>Emal</label><input type="email" name="email"></p>
                                            <input type="submit" value="creer">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>  
            </div>
        </div>
    </div> 