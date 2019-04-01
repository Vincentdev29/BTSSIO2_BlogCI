<div id="contenu">
  <form method="post" action="<?php echo base_url().'Identification/';?>">
    <p>
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" value="" size="50"/>
    </p>
    <p>
      <label for="prenom">Prenom</label>
      <input type="text" id="prenom" name="prenom" value="" size="50"/>
    </p>
    <p>
      <label for="pseudo">Pseudo</label>
      <input type="text" id="pseudo" name="pseudo" value="" size="50"/>
    </p>
    <p>
      <label for="mail">Mail</label>
      <input type="text" id="mail" name="mail" value="" size="50"/>
    </p>
    <p>
      <label for="dateNaissance">Date de naissance</label>
      <input type="date" name="dateNaissance"/>
    </p>
    <p>
      <label for="motPasse">Mot de passe</label>
      <input type="text" id="motPasse" name="nom" value="" size="50"/>
    </P>
    <p>
      <input type="submit" value="Se connecter"/>
      <input type="reset" value="Annuler" name="annuler"/>
    </p>
  </form>
</div>
