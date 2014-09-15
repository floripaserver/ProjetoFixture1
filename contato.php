<?php

require_once 'Core/Contato.php';

if ($_POST) {

    $contato = new Contato();

    $contato->setNome($_POST['nome'])
        ->setEmail($_POST['email'])
        ->setAssunto($_POST['assunto'])
        ->setMenssagem($_POST['menssagem']);

    $result = $contato->enviarEmail();

}
?>

<section class="content-header">
    <h1>
        Contato
        <small>Pagina de contato</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contato</li>
    </ol>
</section>

<section class="content">
    <?php
    if ($_POST && isset($result)) {
        ?>
        <div class="box">
            <div class="box-header">
                <i class="fa fa-archive"></i>

                <h3 class="box-title">Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h3>

            </div>
            <div class="box-body">
                <?php
                echo 'Nome: ' . $nome = $contato->getNome();
                echo '<br>Email: ' . $contato->getEmail();
                echo '<br>Assunto: ' . $assunto = $contato->getAssunto();
                echo '<br>Menssagem: ' . $menssagem = $contato->getMenssagem();
                ?>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row">

        <!-- quick email widget -->
        <div class="box">

            <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Email</h3>

            </div>
            <div class="box-body">
                <form class="form" action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome:"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email:"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="assunto" placeholder="Assunto"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="menssagem" placeholder="Menssagem"
                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                        </textarea>
                    </div>
                    <div class="box-footer clearfix">
                        <button class="pull-right btn btn-default" id="sendEmail">Enviar <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

