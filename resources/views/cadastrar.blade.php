<?php
$nome = $_POST ['mus_nome'];
$link = $_POST ['mus_link'];
$genero = $_POST ['mus_genero'];

$strcon = mysqli_connect('localhost', 'kadu', '123', 'banco_teste') or die ('Erro ao consultar');
$sql = "INSERT INTO registerMusic VALUES";
$sql = "('$nome', '$link', 'genero')";
mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Música cadastrada com sucesso!" 
?>