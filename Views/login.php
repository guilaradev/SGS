<?php 
   include('head.php');
   include('../Controllers/clienteDB.php');
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   ?>
<body class="login-page" style="min-height: 466px;">
   <div class="login-box">
      <div class="card card-outline card-primary">
         <div class="card-header text-center">
            <a href="login.php" class="h1"><b>SGS</b> LOGIN</a>
         </div>
         <div class="card-body">
            <p class="login-box-msg">Faça login para iniciar sua sessão</p>
            <form action="../../index3.html" method="post">
               <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-8">
                     <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Lembrar de mim
                        </label>
                     </div>
                  </div>
                  <div class="col-4">
                     <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                  </div>
               </div>
            </form>
            <p class="mb-1">
               <a href="forgot-password.html">Esqueci minha senha</a>
            </p>
         </div>
      </div>
   </div>
   <script src="../../plugins/jquery/jquery.min.js"></script>
   <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>