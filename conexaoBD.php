<?php
$servername = "localhost";
$username = "id17634163_root";
$password = "6kJ36_J9%U]VY0bR";
$dbname = "id17634163_livros";
$conexao = new mysqli($servername, $username, $password, $dbname); 
if ($conexao->connect_error) 
{
die("Connection failed: " . $conexao->connect_error);
}
?>