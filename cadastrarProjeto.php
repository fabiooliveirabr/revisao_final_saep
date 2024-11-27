<?php
include "conexao.php";

$nome_projeto = $_POST['nome_projeto'];
$fk_id_usuario = $_POST['fk_id_usuario'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO tb_projetos 
        (nome_projeto, fk_id_usuario, situacao, descricao)
        VALUES 
        ('$nome_projeto', '$fk_id_usuario', '$situacao', '$descricao')";

$inserir = $pdo->prepare($sql);

try {
    $inserir->execute();
    echo "Projeto cadastrado com sucesso!";
} catch (PDOException $erro) {
    echo "Falha ao cadastrar! " . $erro->getMessage();
}
?>
