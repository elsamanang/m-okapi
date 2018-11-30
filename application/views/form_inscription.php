<h1>Creer votre compte M-OKAPI</h1>
<form method="post" action="<?php echo site_url('utilisateur/nouvel_utilisateur')?>">
    Nom complet : <input type="text" name="nomcomplet" required=""><br><br>
    Login : <input type="text" name="login" required=""><br><br>
    Mot de pass : <input type="password" name="mdp" required=""><br><br>
    Confirmer : <input type="password" name="mdp_conf" required=""><br><br>
    Email : <input type="email" name="email" required=""><br><br>
    <input type="submit" value="inscription"><br><br>
</form>