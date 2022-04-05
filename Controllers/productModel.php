
<?php 

require_once('connDB.php');
// SELECT
try {
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $data = $conn->query('SELECT * FROM produtos');

   foreach($data as $row) {
      //print_r($row);
   }
} catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
}
ini_set('display_errors', 1);
error_reporting(E_ALL);


//INSERT
   if ($_POST) {
      // Only process if form is submitted (when page is launched, it use GET method)

      $stmt = $conn->prepare("INSERT INTO produtos (NomeProduto, quantProd, precoProd, ativo) VALUES (:nomeProduto, :qtdEstoque, :precoUni, 1)");

      $stmt->bindParam(':nomeProduto', $_POST['nomeProduto']);
      $stmt->bindParam(':qtdEstoque', $_POST['qtdEstoque']);

      $stmt->bindParam(':precoUni', $_POST['precoUni']);
      $stmt->execute();

      echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso'); 
            window.location='../Views/addClient.php'; 
            </script>";
      exit;
      
  }

//UPDATE

//DELETE


?>