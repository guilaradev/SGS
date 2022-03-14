<?php
try {
    $user = 'root';
    $pass = '';
    $conn = new PDO('mysql:host=localhost;dbname=sistema-gerencial', $user, $pass);


} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>