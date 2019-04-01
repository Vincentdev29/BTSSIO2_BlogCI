<div id="contenu">

  <?php if (!empty($connection))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>

  <form method='post' action="<?php echo base_url().'Identification/seConnecter'?>">
    <p>
      <label for="nom">Pseudo / email</label>
      <input type="text" id="pseudo" name="pseudo" value="" size="50"/>
    </p>
    <p>
      <label for="nom">Mot de passe</label>
      <input type="text" id="motdepasse" name="motdepasse" value="" size="50"/>
    </p>
    <p>
      <input type="submit" value="Se connecter"/>
      <input type="reset" value="Annuler" name="annuler"/>
    </p>
  </form>
</div>
