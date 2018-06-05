<?php
require_once 'CategoriaCrud.php';
require_once 'ProdutoCrud.php';
$catC = new CategoriaCrud();
$categorias = $catC->getCategorias();
$p = new ProdutoCrud();
$produtos = $p->getProdutos();?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#abas ul li').click(function(){
                $(this).toggleClass("selecionado");
                var meuId = $(this).attr("id");
                $("."+meuId).slideToggle();
            });

        });
    </script>
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>

    <div id="abas">
        <ul>
            <?php foreach ($categorias as $cat):?>
            <li class="selecionado" id="aba<?=$cat->getId();?>"><?= $cat->getNome();?></li>
            <?php endforeach;?>
        </ul>
    </div>

    <div id="container">
        <?php foreach ($produtos as $prod):?>
        <div class="conteudo aba<?= $prod->getIdCatProd(); ?>"><?= $prod->getNome();?></div>
        <?php endforeach;?>
    </div>


</body>
</html>