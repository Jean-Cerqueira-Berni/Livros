<?php require_once ('verificarAcesso.php');?>
<?php require_once ('conexaoBD.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta httpequiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<title>Excluir PDO</title>
</head>
<body class="w3-black">
<a href="principal.php" class="w3-display-top-middle w3-red w3-center w3-padding w3-button"
style="text-decoration: none; ">
<i class="fa fa-ban"
style="font-size: 5em"></i>
<p style="font-weight: bold;">CANCELAR EXCLUSÃO</p>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
<h1 class="w3-center w3-indigo w3-round-large w3-margin">
EXLUIR ID:
<?php echo " ".$_GET['id']?> </h1>
<form action="excluirAction.php" class="w3-container-w" method='post'>
<input name="id" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
<br>
<label class="w3-text-indigo"
style="font-weight: bold;">ISBN</label>
<input name="txtISBN" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['ISBN']?>">
<br>
<label class="w3-text-indigo"
style="font-weight: bold;">Nome</label>
<input name="txtNome" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['Nome']?>">
<br>
<label class="w3-text-indigo"
style="font-weight: bold;">Autor</label>
<input name="txtAutor" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['Autor']?>">
<br>
<label class="w3-text-indigo" style="font-weight: bold;">Páginas</label>
<input name="txtPaginas" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['Paginas']?>">
<br>
<label class="w3-text-indigo" style="font-weight: bold;">Assunto</label>
<input name="txtAssunto" class="w3-input w3-gray w3-border" disabled value="<?php echo $_GET['Assunto']?>">
<br>
<button name="btnExcuir" class="w3-button w3-indigo w3-cell w3-round-large w3-right">
<i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
</button>
</form>
</div>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display- topright">
<form action="logoutAction.php" class="w3-container" method='post'>
<button name="btnLogout" class="w3-button w3-red w3-cell w3-round- large w3-center w3-displays-bottom">
<i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
</button>
</form>
</div>
</body>
</html>