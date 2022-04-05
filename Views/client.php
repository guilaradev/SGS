<?php 
   include('header.php');
   include('sidebar.php');
   include('../Controllers/clienteDB.php');
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
?>
<div class="content-wrapper">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
               <h3 class="card-title">Listagem de Clientes</h3>
               <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                     <input type="text" name="table_search" class="form-control float-right" placeholder="Search" />
                     <div class="input-group-append">
                           <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                           </button>
                     </div>
                  </div>
               </div>
         </div>

         <div class="card-body table-responsive p-0" style="height: 80vh;">
               <table class="table table-head-fixed text-nowrap">
                  <thead>
                     <tr>
                           <th>ID</th>
                           <th>Nome Completo</th>
                           <th>Email</th>
                           <th>Telefone</th>
                           <th>CPF</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                        <?php 
                           $data = $conn->query('SELECT * FROM cliente');
                           while($row = $data->fetch(PDO::FETCH_ASSOC)):
                        ?>
                        <tr>
                           <td><?php echo $row['idCliente']; ?></td>
                           <td><?php echo $row['NomeCliente']; ?></td>
                           <td><?php echo $row['EmailCliente']; ?></td>
                           <td><?php echo $row['Telefone']; ?></td>
                           <td><?php echo $row['cpfCliente']; ?></td>
                           <td>
                              <a href="">
                                 <i class="fas fa-pen-square">
                                    
                                 </i>
                              </a>
                              
                              <a style="color:red" href="../Controllers/deleteClient.php?idCliente=<?php echo $row["idCliente"]; ?> ">
                                 <i class="fas fa-trash">
                                 
                                 </i>
                              </a>
                           </td>
                        </tr>
                        <?php
                           endwhile;
                        ?>
                     
                  </tbody>
               </table>
         </div>
      </div>
   </div>
</div>
<?php 
   include('footer.php');
?>
