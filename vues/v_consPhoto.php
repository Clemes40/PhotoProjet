<html>
<body>
  <style type="text/css">
  @import url("../css/base.css");
  </style>
<div align="center">
<h1>Photos enregistré</h1>

    <?php

    require_once("../modele/connexion.php");
        //requete 1
        $sql = 'SELECT * from photo';
        $cursor = $dbh->query($sql);
        $row = $cursor->fetch();

        //requete 2
        $sql2 = 'SELECT nomPhoto from photo';
        $cursor2 = $dbh->query($sql2);
        $row2 = $cursor2->fetch();


        while ($row != false){
            print $row['nomPhoto'].' - ';
            print $row['descPhoto'].' - ';
            $row['idPhoto'];
            print("<br></br>");
            echo ('<img src="../photos/'.$row2['nomPhoto'].'"/>');
            echo ("<br></br>");
            echo "<a href='v_DetailPhoto.php?idPhoto=".$row['idPhoto']."'> Voir les details </a>";
            print ("<br></br>");
            $row2 = $cursor2->fetch();
            $row = $cursor->fetch();
        }
        $cursor->CloseCursor();
    ?>
  </div>
</div>
    <br/><br/>
    <a href="../index.html" >Accueil</a>
    </div>
    </body>
    </html>

    </form>
    </table>
</section>
