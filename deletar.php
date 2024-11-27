<?php
include "conexao.php";
$id_projeto = $_POST['id_projeto'];
$sql = "DELETE FROM tb_projetos
        WHERE id_projeto='$id_projeto'";
$deletar = $pdo->prepare($sql);
try{
    $deletar->execute();
    if($deletar->rowCount()>=1){
        echo "Deletado com sucesso!";
    }else{
        echo "Nada foi deletado!";
    }
}catch(PDOException $erro){
    echo "Falha ao deletar!".$erro->getMessage();
}



?>