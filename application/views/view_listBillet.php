<div id="contenu">
  <?php $i = 1; ?>
  <?php foreach ($lesBillets as $billet): ?>
    <h2 class="titreBillet"><?php echo anchor('Site/leBillet/'.$i, $billet['titre']);?></h2>
    <time><?= $billet['date'] ?></time>
    <p><?= $billet['contenu'] ?></p>
    <hr />
  <?php $i++; endforeach; ?>
</div>
