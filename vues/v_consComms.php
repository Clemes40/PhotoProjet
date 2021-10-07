<html>
<body>
<div align="center">
<h1>Commentaires écrits</h1>
<?php
require("../modele/connexion.php");

$sql = 'SELECT * from commentaire';
$cursor = $dbh->query($sql);
$row = $cursor->fetch();
while ($row != false){
    print $row['texteCom'].' - ';
    print $row['refPhoto'].' - ';
    print("<br></br>");
    $row = $cursor->fetch();
}
$cursor->CloseCursor();
?>
<br/><br/>
<a href="../index.html" >Accueil</a>
</div>
</body>
</html>
