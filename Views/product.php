<?php 
include('../Controllers/vendasDB.php'); 
include('header.php');
include('sidebar.php');
?>
<div class="content-wrapper">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
               <h3 class="card-title">Listagem de Vendas</h3>
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
                           <th>Codigo</th>
                           <th>Nome Produto</th>
                           <th>Situação</th>
                           <th>Quantidade</th>
                           <th>Valor</th>
                           <th>Editar </th>
                     </tr>
                  </thead>
                  <tbody>
                        <?php 
                           $data = $conn->query('SELECT * FROM produtos');
                           
                           while($row = $data->fetch(PDO::FETCH_ASSOC)):
                        ?>
                        <tr>
                           <td><?php echo $row['codProd']; ?></td>
                           <td><?php echo $row['NomeProduto']; ?></td>
                           <td><?php if($row['Ativo'] == 1){
                              echo 'Ativo';
                           }else{
                              echo 'Inativo';
                           }; 
                           
                           ?></td>
                           <td><?php echo $row['quantProd']; ?></td>
                           <td>R$ <?php echo $row['precoProd'];?></td>
                           <td>
                              <a href="">
                                 <i class="fas fa-pen-square">
                                    
                                 </i>
                              </a>
                              
                              <a style="color:red" href="../Controllers/deleteProduct.php?codProd=<?php echo $row["codProd"]; ?> ">
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
<?php include('footer.php');?>