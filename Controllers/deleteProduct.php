
<?php 

require_once('connDB.php');

//DELETE
      // Only process if form is submitted (when page is launched, it use GET method)

      $stmt = $conn->prepare("DELETE FROM produtos WHERE codProd=:codProd");

      $stmt->bindParam(':codProd', $_GET['codProd']);
      $stmt->execute();
      echo "<script type='text/javascript'>alert('Produto excluido com sucesso'); 
            window.location='../Views/product.php'; 
            </script>";
      exit;


?>