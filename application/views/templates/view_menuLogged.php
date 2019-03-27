<div id="topMenu">
  <div id="mainMenu">
    <?php echo anchor(base_url(),'Accueil');?>
  </div>
  <div id="menuConnexion">
    <?php
      //Accès au profil
      echo anchor('Identification/profilUtilisateurConnecte', 'Mon Profil')
      //Bouton de déconnexion
      echo anchor('Identification/seDeconnecter', 'Déconnexion');
    ?>
  </div>
</div>
