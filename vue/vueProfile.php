<?php 
    $titre = "Profil utilisateur de : ".$user->getPseudo();
?>
<?php 

    ob_start();

?>
<h1>Vous êtes sur le profil de : <?php echo $user->getPseudo();?></h1>
<p>Mail : <?php echo $user->getEmail();?></p>
<?php
      foreach($user->getVideo() as $video) {
          
    ?>
      <div class="col-md-4">
          <h2><?php echo $video->getTitre(); ?></h2>
          <p>Description ...</p>
          <p><a class="btn btn-default" href="index.php?action=video&id=<?php echo $video->getId();?>" role="button">Voir &raquo;</a></p>
        </div>
    <?php }?>

<?php 

    $contenu = ob_get_clean();

?>
<?php 
    require('gabarit.php');
?>

