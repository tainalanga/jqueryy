<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>exe</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	ul li {
		display: inline;
	}
</style>
<body>

<?php

    if (isset($_GET['acao'])){
    $acao = $_GET['acao'];}

    else {$acao = "index";}
    require_once 'CategoriaCrud.php';

    switch ($acao){
        case 'index':
            include 'index2.php';
    }
?>


</body>
</html>