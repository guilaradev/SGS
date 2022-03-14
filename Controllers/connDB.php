<?php
try {
   $user = 'root';
   $pass = '';
   $dbh = new PDO('mysql:host=localhost;dbname=sistema-gerencial', $user, $pass);
   echo "Conectado ao banco de dados";
   $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>