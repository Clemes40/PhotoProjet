<html>
<head>
</head>
<body>
<?php
require("../modele/connexion.php");

if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
}
else {
  print("ajout non effectué");
}

$descPhoto = $_POST['descPhoto'];

$count = $dbh->exec("insert into photo (nomPhoto, descPhoto) values('$name','$descPhoto')");
if ($count > 0) echo $count." ligne ajoutee(s)";
else echo "Pas ajouter cheh";

move_uploaded_file($tmpName, '../photos/'.$name);
?>
<br/><br/>
<a href="../vues/v_consPhoto.php" >Accueil</a>
</body>
</html>
