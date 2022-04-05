
<?php 

require_once('connDB.php');

//DELETE
      // Only process if form is submitted (when page is launched, it use GET method)

      $stmt = $conn->prepare("DELETE FROM cliente WHERE idCliente=:idCliente");

      $stmt->bindParam(':idCliente', $_GET['idCliente']);
      $stmt->execute();
      echo "<script type='text/javascript'>alert('Produto excluido com sucesso'); 
            window.location='../Views/client.php'; 
            </script>";
      exit;


?>