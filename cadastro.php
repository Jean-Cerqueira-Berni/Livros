<?php require_once ('conexaoBD.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cadastro de Livros</title>
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-blue w3-round-large w3-margin">Cadastro de Livros</h1>
<form action="cadastroAction.php" class="w3-container" method='post'>
<label class="w3-text-blue" style="font-weight: bold;">Código</label>
<input name="txtCod" class="w3-text-blue w3-input w3-dark-grey w3-border" disabled><br>
<label class="w3-text-blue" style="font-weight: bold;">ISBN</label>
<input name="txtISBN" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font-weight:bold;">Nome</label>
<input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font-weight: bold;">Autor</label>
<input name="txtAutor" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font-weight: bold;">Número de Páginas</label>
<input name="txtPaginas" class="w3-input w3-light-grey w3-border"><br>
<label class="w3-text-blue" style="font-weight: bold;">Assunto</label>
<input name="txtAssunto" class="w3-input w3-light-grey w3-border"><br>
<button name="btnAdd" class="w3-button w3-blue w3-cell w3-round-large w3-right w3-margin-right">
<i class="w3-xxlarge fa fa-plus-square"></i> Adicionar</button>
</form>
</div>
<a href="principal.php" class="w3-display-bottom ">
<i class="fa fa-arrow-circle-left w3-large w3-blue w3-button w3-xxlarge"></i>
</a>
</body>
</html>