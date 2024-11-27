<?php
include "conexao.php";

$nome_usuario = $_POST['nome_usuario'];

$sql = "INSERT INTO tb_usuarios 
        (nome_usuario) 
        VALUES 
        ('$nome_usuario')";

$inserir = $pdo->prepare($sql);

try {
    $inserir->execute();
    echo "Cadastrado com sucesso!";
} catch (PDOException $erro) {
    echo "Falha ao cadastrar! " . $erro->getMessage();
}
?>
