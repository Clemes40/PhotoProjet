<style type="text/css">
@import url("../css/base.css");
</style>

<?php
require_once('../modele/connexion.php');

$idd=$_GET['idPhoto'];

$sql = 'SELECT * from commentaire where refPhoto ='."$idd";
$cursor = $dbh->query($sql);
$row = $cursor->fetch();


$sql2 = 'SELECT nomPhoto from photo where idPhoto='."$idd";
$cursor2 = $dbh->query($sql2);
$row2 = $cursor2->fetch();


$sql3 = 'SELECT * from photo where idPhoto='."$idd";
$cursor3 = $dbh->query($sql3);
$row3 = $cursor3->fetch();


echo ('<img src="../photos/'.$row2['nomPhoto'].'"/>');
print("<br></br>");
echo "Nom : " .$row2['nomPhoto']."<br><br>";

while ($row != false){
    print $row['texteCom'];
    print "                                 <a href='../controleur/c_supprcom.php?idCom=".$row['idCom']. "&idPhoto=".$row3['idPhoto']."'> supprimer </a>";
    print("<br></br>");
    $row = $cursor->fetch();
}

$cursor->CloseCursor();
$cursor2->CloseCursor();
$cursor3->CloseCursor();

?>
<html>

<form action="../controleur/c_ajoutcom.php" method="post">
  <table border="0">
    <tr>
      <td width="108">texteCom</td>
      <td width="105">
        <input type="text" name="texteCom" size="30" maxlength="30">
         <input type="hidden" name="idPhoto" value="<?=$idd ?>" />
      </td>
    </tr>
  </table>
  <input type="submit" value="Ajouter">
</form>
  <a href="v_consPhoto.php" >Accueil</a>
</html>
