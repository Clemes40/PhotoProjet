<html>
<head>
</head>
<body>
<?php
require("../modele/connexion.php");

$texteCom=$_POST['texteCom'];
$RefPhoto=$_POST['idPhoto'];
$url = "../vues/v_DetailPhoto.php?idPhoto=".$RefPhoto;

$count = $dbh->exec("insert into commentaire (texteCom, refPhoto) values('$texteCom',$RefPhoto)");
if ($count > 0) {
  header('Location:'.$url);
}
else echo "Ajout non effectue !";
?>
<br/><br/>
<a href="../vues/v_consPhoto.php" >Accueil</a>
</body>
</html>
