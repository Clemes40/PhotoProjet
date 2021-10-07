<?php
$hote='phpmyadmin.exedesk.fr';
//$port='3307'; // MariaDb
$port='3306'; // MySQL
$bd='EXE_6_youxn';
$utilisateur='EXE_6_youxn';
$mdp='3XP7XMxj7u(1NsgU';
$dsn='mysql:dbname='.$bd.';host='.$hote.';port='. $port;

try {
    $dbh = new PDO($dsn, $utilisateur,$mdp);
}
catch (PDOException $e){
    echo 'Connexion échouée : ' . $e->getCode().' - '.$e->getMessage();
}

?>
