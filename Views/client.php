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
               <h3 class="card-title">Fixed Header Table</h3>
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

         <div class="card-body table-responsive p-0" style="height: 300px;">
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
                        print_r($data);
                     ?>
                     </tr>
                  </tbody>
               </table>
         </div>
      </div>
   </div>
</div>
<?php 
   include('footer.php');
?>
