<?php require_once ('conexaoBD.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta httpequiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Acervo</title>
</head>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
<body class="w3-black">
<a href="principal.php" class="w3-display-bottom-left">
<i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>
</a>
<?php
$host = "localhost";
$usuario = "id17634163_root";
$senha = "6kJ36_J9%U]VY0bR";
$bd = "id17634163_livros";
try{
$conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $usuario, $senha);
$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '<div class="w3-padding w3-content w3-display-top-middle w3-margin">
<h1 class="w3-center w3-indigo w3-round-large w3-margin w3-round-large">Livros do Acervo</h1>
<table class="w3-table-all w3-centered w3-text-black w3-round">
<thead>
<tr class="w3-center w3-indigo w3-round">
<th>Código</th>
<th>ISBN</th>
<th>Nome do Livro</th>
<th>Autor</th>
<th>Número de Páginas</th>
<th>Assunto</th>
<th>Excluir</th>
<th>Atualizar</th>
</tr>
<thead>';
$sql = "SELECT * FROM livros ORDER BY Nome ASC"  ;
$resultado = $conecta->query($sql);
if($resultado != null)
foreach($resultado as $linha) {
echo '<tr>';
echo '<td>'.$linha['id_livro'].'</td>';
echo '<td>'.$linha['ISBN'].'</td>';
echo '<td>'.$linha['Nome'].'</td>';
echo '<td>'.$linha['Autor'].'</td>';
echo '<td>'.$linha['Paginas'].'</td>';
echo '<td>'.$linha['Assunto'].'</td>';
echo '<td><a href="excluir.php?id='.$linha['id_livro'].'&ISBN='.$linha['ISBN'].'&Nome='.$linha['Nome'].'&Autor='.$linha['Autor'].'&Paginas='.$linha['Paginas'].'&Assunto='.$linha['Assunto'].'">
<i class="fa fa-user-times w3-large w3-text-indigo"></i> </a></td>';
echo '<td><a href="atualizar.php?id='.$linha['id_livro'].'&ISBN='.$linha['ISBN'].'&Nome='.$linha['Nome'].'&Autor='.$linha['Autor'].'&Paginas='.$linha['Paginas'].'&Assunto='.$linha['Assunto'].'">
<i class="fa fa-refresh w3-large w3-text-indigo"></i> </a></td>';
}
echo '</table>
</div>';
}catch(PDOException $e){
echo "falha ao conectar: ". $e->getMessage();
}
?>
</div>
</body>
</html>