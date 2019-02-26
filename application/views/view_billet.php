<div id="contenu">
  <h2 class="titreBillet"><?= $billet['titre'] ?></h2>
  <time><?= $billet['date'] ?></time>
  <p><?= $billet['contenu'] ?></p>
  <hr />
  <h2>Commentaire - <?= count($lesCommentaires); ?></h2>
  <?php foreach ($lesCommentaires as $commentaire): ?>
    <h3><?= $commentaire['auteur'] ?></h3>
    <h6><?= $commentaire['date'] ?></h6>
    <p><?= $commentaire['contenu']?></p>
    <hr class="hrCommentaire"/>
  <?php endforeach; ?>
</div>

<div>
  <form method='post' id="comForm" action="<?php echo base_url().'Site/submitFormulaireCom/'.$billet['id'];?>">
    <h5>Auteur</h5>
    <input type="text" name="auteur" value="" size="50" />
    <h5>Commentaire</h5>
    <input type="text" name="comment" value=""/>
    <input type="submit" value="Submit" target="<?php echo base_url().'Site/leBillet/'.$billet['id'];?>"/>
  </form>
</div>
