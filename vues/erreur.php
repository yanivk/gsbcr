<?php
              if ( nbErreurs($tabErreurs) > 0 ) 
              {
 ?>
 <div id="erreur">

 <?php             
                echo toStringErreurs($tabErreurs);
 ?>
 </div>            
 <?php               
              }
?>
