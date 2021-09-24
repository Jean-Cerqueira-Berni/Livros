<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta httpequiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Atualização do Livro</title>
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
<?php
$host = "localhost";
$usuario = "id17634163_root";
$senha = "6kJ36_J9%U]VY0bR";
$bd = "id17634163_livros";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $usuario, $senha);
$conecta-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "falha ao conectar: ". $e->getMessage();
}
try{
$sql = $conecta->prepare(" UPDATE livros SET ISBN=?, Autor= ?, Nome= ?, Paginas= ?, Assunto= ? WHERE id_livro= ?; ");
$sql->bindParam(1,$_POST['txtISBN']);
$sql->bindParam(2,$_POST['txtAutor']);
$sql->bindParam(3,$_POST['txtNome']);
$sql->bindParam(4,$_POST['txtPaginas']);
$sql->bindParam(5,$_POST['txtAssunto']);
$sql->bindParam(6,$_POST['id']);
$sql->execute();
echo '<a href="listar.php">
<h1 class="w3-button w3-deep-purple w3-round-large">Livro Atualizado com sucesso! </h1>
</a>';
}catch(PDOException $e){
echo '<a href="listar.php">
<h1 class="w3-button w3-deep-purple w3-round-large "> ERRO! </h1></a>';
};
?>
</div>
</body>
</html>