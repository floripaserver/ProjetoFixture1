<?php
require_once 'Core/Empresa.php';

$empresa = new Empresa();

$emp = $empresa->quemSomos();
?>

<section class="content-header">
    <h1>
        <?php echo $emp['titulo_empresa']; ?>
        <small>Pagina empresa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Empresa</li>
    </ol>
</section>

<section class="content">

    <div class="row">

        <div class="box">

            <div class="box-header">
                <i class="fa fa-archive"></i>

                <h3 class="box-title"><?php echo $emp['titulo_empresa']; ?></h3>

            </div>
            <div class="box-body">
                <?php echo $emp['descricao_empresa']; ?>
            </div>
        </div>

    </div>
</section>