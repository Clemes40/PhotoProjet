<html>
<head>
</head>
<body>
<?php
require("../modele/connexion.php");

$idC = $_GET['idCom'];
$RefPhoto = $_GET['idPhoto'];
$url = "../vues/v_DetailPhoto.php?idPhoto=".$RefPhoto;

$count = $dbh->exec("delete from commentaire where idCom=".$idC);
if($count){
  header('Location:'.$url);
}
else echo "Suppression non effectuée !";
?>
<br/><br/>
<a href="../vues/v_consPhoto.php" >Accueil</a>
</body>
</html>
