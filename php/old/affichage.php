<table border>
<thead>
    <th>Nom</th>
    <th>Prenom</th>
</thead>
<?php
    include_once"cnx.php";

    
    $R = $bdd->prepare("SELECT nom,prenom FROM developpeurs ORDER BY nom ASC");
    $R->execute();
    $data = $R->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key=>$val){
        ?>
  <tr>
    <td><?php echo $val['nom'];?></td>
    <td><?php echo $val['prenom'];?></td>
  </tr>
        <?php
    }

    ?>
    </table>