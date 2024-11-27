<?php
include "conexao.php";
$id_projeto = $_POST['id_projeto'];
$nome_projeto = $_POST['nome_projeto'];
$fk_id_usuario = $_POST['fk_id_usuario'];
$situacao = $_POST['situacao'];
$descricao = $_POST['descricao'];

$sql = "UPDATE tb_projetos SET
        nome_projeto='$nome_projeto',
        fk_id_usuario='$fk_id_usuario',
        situacao='$situacao',
        descricao='$descricao' WHERE id_projeto='$id_projeto'";
$atualizar = $pdo->prepare($sql);
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "Atualizado com sucesso";
    }else{
        echo "Nada alterado";
    }
}catch(PDOException $erro){
    echo "Erro ao atualizar".$erro->getMessage();
}