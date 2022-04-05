<?php 
   include('header.php');
   include('sidebar.php');
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nova Venda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Nova Venda</a></li>
                        <li class="breadcrumb-item active">Painel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
                <form action="../Controllers/productModel.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Produto</label>
                            <input type="text" name="nomeProduto" class="form-control" id="nomeProduto" placeholder="Ex: Fone de Ouvido Bt. Ag15" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantidade de Produto em Estoque</label>
                            <input type="number" class="form-control" name="qtdEstoque" id="qtdEstoque" placeholder="Ex: 100" />
                           </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Preço Unitário</label>
                           <input type="text" class="form-control" name="precoUni" id="precoUni" placeholder="Ex: R$ 15,00" />
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
