<?php require_once ('verificarAcesso.php');?>
<?php require_once ('conexaoBD.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale= 1.0">
<meta httpequiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Cadastro de Livros</title>
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "pwii";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $usuario, $senha);
$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
echo "falha ao conectar: ". $e-> getMessage();
}
$sql = "INSERT INTO livros (ISBN, Autor, Nome, Paginas, Assunto) VALUES ('".$_POST['txtISBN']."','".$_POST['txtAutor']."', '".$_POST['txtNome']."' ,'".$_POST['txtPaginas']."', '".$_POST['txtAssunto']."')";
try{ $resultado = $conecta-> query($sql); 
echo '<a href="principal.php">
<h1 class="w3-button w3-blue">
Livro Cadastrado com sucesso! </h1>
</a>
';
}catch(PDOException $e){
echo '<a href="principal.php">
<h1 class="w3-button w3-blue">
ERRO! </h1>
</a>
';
}
?>
</div>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display- topright">
<form action="logoutAction.php" class="w3-container" method='post'>
<button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-center w3-display-bottom">
<i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
</button>
</form>
</div>
</body>
</html>