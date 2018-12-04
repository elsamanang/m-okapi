<h1>Authentification</h1>
<form method="post" action="<?php echo site_url('utilisateur/connexion')?>">
    login : <input type="text" name="login"><br><br>
    mot de passe : <input type="password" name="mdp"><br><br>
    <input type="submit" value="connexion"><br><br>
    <p style="color: red;"><?php
        echo $this->session->erreur;
    ?></p>
</form>