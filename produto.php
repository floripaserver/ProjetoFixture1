<?php

require_once 'Core/Produto.php';

$prod = new Produto();

$produtos = $prod->listarProdutos();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Lista de Produtos
        <small>listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="produto">Produtos</a></li>
        <li class="active">Lista de produtos</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Produtos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="grid1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($produtos as $key => $values) {
                            echo "<tr>" .
                                "<td>{$values['id']}</td>" .
                                "<td>{$values['nome']}</td>" .
                                "<td>{$values['valor']}</td>" .
                                "</tr>";
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>


</section><!-- /.content -->

