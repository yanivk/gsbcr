<?php

  $repInclude = './include/';
  $repVues = './vues/';
  
require($repInclude . "_init.inc.php");
  
$description=lireDonneePost("description", "");


if (count($_POST)==0)
{
  $etape = 1;
}

  $praticien = rechercher($description);


// Construction de la page Rechercher
// pour l'affichage (appel des vues)

include($repVues."entete.php") ;
include($repVues."menu.php") ;

?> 

<div id="contenu">
<?php
include($repVues ."erreur.php");
//echo "etape ".$etape;
include($repVues."vLister.php") ;


?>
</div>

<?php
include($repVues."pied.php") ;
?>
