<?php require_once ('verificarAcesso.php');?>
<?php require_once ('conexaoBD.php');?>
<?php require_once ('header.php'); ?>
    <title>Cadastro de Novo Livro</title>
</head>

<body class="w3-black w3">
    <h1 class=" w3-center w3-purple w3-margin w3-padding w3-roundlarge">
        Projeto Lista de Livros</h1>
    <div class="w3-container w3-col w3-row w3-center ">
        <div class="w3-col w3-button w3-blue w3-cell w3-round-large w3-margin-right w3-margin-left w3-half" style="width:43%;">
            <a href="cadastro.php" style="text-decoration: none;">
                <i class="fa fa-cube" style="font-size: 10.5em"></i>
                <p style="font-size: 2em">Adicionar</p>
            </a>
        </div>
        <div class="w3-col w3-button w3-indigo w3-cell w3-round-large w3-margin-right w3-half" style="width:43%;">
            <a href="listar.php" style="text-decoration: none;">
                <i class=" fa fa-list-alt" style="font-size: 10.5em"></i>
                <p style="font-size: 2em">Listar</p>
            </a>
        </div>
    </div>
</body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display- topright">
<form action="logoutAction.php" class="w3-container" method='post'>
<button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-center w3-display-bottom">
<i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
</button>
</form>
</div>
</html>