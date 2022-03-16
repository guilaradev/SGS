
<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);
if ($_POST) {
   // Only process if form is submitted (when page is launched, it use GET method)
   require 'connDB.php';

 
   $stmt = $conn->prepare("INSERT INTO cliente (NomeCliente, EmailCliente, Telefone, cpfCliente) VALUES (:nomeCompleto, :email, :telefone, :cpf)");
   

   $stmt->bindParam(':nomeCompleto', $_POST['nomeCompleto']);
   $stmt->bindParam(':email', $_POST['email']);

   $stmt->bindParam(':telefone', $_POST['telefone']);
   $stmt->bindParam(':cpf', $_POST['cpf']);
   $stmt->execute();

   echo "<script type='text/javascript'>alert('Cliente cadastrado com sucesso'); 
         window.location='../Views/addClient.php'; 
         </script>";
   exit;
   
 }
?>