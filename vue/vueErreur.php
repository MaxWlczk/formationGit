<?php 
    $titre = "Erreur survenue";

ob_start();
?>
<p class="alert alert-danger">
<?php 
    echo "une erreur est survenue sur le site blbl"."<br>".$erreur;
?>    
</p>
<?php
$contenu = ob_get_clean();

?><?php 
    require("gabarit.php");
?>