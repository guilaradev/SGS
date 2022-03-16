<?php 
   include('header.php');
   include('sidebar.php');
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Adicionar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Adicionar Cliente</a></li>
                        <li class="breadcrumb-item active">Painel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
                <form action="../Controllers/insertClient.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text" name="nomeCompleto" class="form-control" id="nomeCompelto" placeholder="Ex: Lucas de Almeida" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ex: email@email.com" />
                           </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Telefone</label>
                           <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Ex: (xx) xxxxx-xxxx" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Ex: xxx.xxx.xxx-xx" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit"  name="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php 
   include('footer.php');
?>
