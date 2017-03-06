<?php 
    $titre = "Titre de la video :".$video->getTitre();
?>

<?php 

    ob_start();

?>


<h1>Vous regardez une video</h1>

<p>Cliquer pour afficher le player !</p>

<?php 
    $url_recup = $video->getUrl();
    if (strpos($url_recup, 'watch?v') == true){
        $url_propre = str_replace('watch?v=', 'embed/', $url_recup);
    }else{
        $url_propre = $url_recup;
    }

?>

<iframe width="877" height="493" src="<?php echo $url_propre?>" frameborder="0" allowfullscreen></iframe>

<?php 

    $contenu = ob_get_clean();

?>
<?php require('gabarit.php')?>