<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta httpequiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Atualizar PDO</title>
</head>
<body class="w3-black">
<a href="index.php" class="w3-display-top-left">
<i class="fa fa-arrow-circle-left w3-large w3-deep-purple w3-button w3-xxlarge"></i>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-deep-purple w3-round-large w3-margin">Atualizar Livro de Código:
<?php echo " ".$_GET['id']?> </h1>
<form action="atualizarAction.php" class="w3-container" method='post'>
<input name="id" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
<br>
<label class="w3-text-deep-purple " style="font-weight:bold;">ISBN</label>
<input name="txtISBN" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['ISBN']?>">
<br>
<label class="w3-text-deep-purple " style="font-weight:bold;">Nome</label>
<input name="txtNome" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['Nome']?>">
<br>
<label class="w3-text-deep-purple " style="font-weight:bold;">Autor</label>
<input name="txtAutor" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['Autor']?>">
<br>
<label class="w3-text-deep-purple " style="font-weight:bold;">Páginas</label>
<input name="txtPaginas" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['Paginas']?>">
<br>
<label class="w3-text-deep-purple " style="font-weight:bold;">Assunto</label>
<input name="txtAssunto" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['Assunto']?>">
<br>
<button name="btnAtualizar" class="w3-button w3-deep-purple w3-cell w3-round-large w3-right">
<i class="w3-xxlarge fa fa-refresh"></i> Atualizar
</button>
</form>
</div>
</body>
</html>