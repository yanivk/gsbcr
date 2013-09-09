<?php

  $repInclude = './include/';
  $repVues = './vues/';
  
require($repInclude . "_init.inc.php");
  
$nom=lireDonneePost("VIS_NOM", "");
$mdp=lireDonneePost("VIS_MDP", "");

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  connecter($nom,$mdp);
  header("Location:lister.php");
}

// Construction de la page Rechercher
// pour l'affichage (appel des vues)

include($repVues."entete.php") ;
include($repVues."menu.php") ;

?> 

<div id="contenu">
<?php
include($repVues ."erreur.php");
//echo "etape ".$etape;
include($repVues."vSeConnecter.inc.php") ;


?>
</div>

<?php
include($repVues."pied.php") ;
?>