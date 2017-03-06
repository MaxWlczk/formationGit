<?php 
    $titre = "Accueil partage tes videos";
?>
<?php 
    ob_start();
?>
<form class="form-group" action="index.php">
    <?php if(isset($_GET['search'])){
        echo "<input type=\"hidden\" name=\"search\" value=\"".$_GET['search']."\"/>";
    }
    ?>
    <label class="radio-inline"><input type="radio" value="2" name="limit">2</label>
    <label class="radio-inline"><input type="radio" value="5" name="limit">5</label>
    <label class="radio-inline"><input type="radio" value="8" name="limit">8</label>
  <button type="submit" class="btn btn-success">Nombre affichés</button>
</form>
<div class="row">
	  
    <?php
      foreach($getVideos as $video) {
//          var_dump($video->getAuthor()->getUrl());
//          ;
    ?>
      <div class="col-md-4">
          <h2><?php echo $video->getTitre(); ?></h2>
          <p>nombre de vues : <?php echo $video->getNbvues(); ?></p>
          <p>Publié par <a href="<?php echo $video->getAuthor()->getUrl(); ?>"><?php echo $video->getAuthor()->getPseudo(); ?></a>
              <?php
//        echo $video['pseudo']
              ?>
              </a></p>
          <p><a class="btn btn-default" href="<?php echo $video->url();?>" role="button">Voir &raquo;</a></p>
        </div>
    <?php }?>


</div>

<?php 
    $contenu = ob_get_clean();
?>
<?php 
    require('gabarit.php');
?>

