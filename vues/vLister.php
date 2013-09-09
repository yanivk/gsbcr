<table border="2" frame="box">
<tr>
<th>Num</th> <th>Nom</th> <th>Prenom</th> <th>Adresse</th> <th>Tel</th> <th>Specialite</th> <th>Departement</th>  <th>Notoriete</th> <th>Type</th> <th>Modifier</th>
</tr>
  <?php
  $i=0;
  while($i < count ( $praticien ))
  {
    echo '<tr>';
    echo '<td align="center">'.$praticien[$i]['numero'].'</td>';
    echo '<td>'.$praticien[$i]['nom'].'</td>';
    echo '<td>'.$praticien[$i]['prenom'].'</td>';
    echo '<td>'.$praticien[$i]['adresse'].'</td>';
    echo '<td>'.$praticien[$i]['Telephone'].'</td>';
    echo '<td>'.$praticien[$i]['Specialite'].'</td>';
    echo '<td>'.$praticien[$i]['departement'].'</td>';
    echo '<td>'.$praticien[$i]['coefficient'].'</td>';
    echo '<td align="right">'.$praticien[$i]['type'].' </td>';
    ?>
    <td> <a href="modifier.php?num='salut'"> Modifier </a> </td>
    <?php
    echo '</tr>';
    $i = $i + 1;
  }
  ?>
  </table>