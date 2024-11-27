<?php
// consultarFinalizads.php
include "conexao.php";
$sql = "SELECT * FROM vw_tudo WHERE situacao='Finalizado'";
$consultar = $pdo->prepare($sql);
try {
    $consultar->execute();
    $resultado = $consultar->fetchAll(PDO::FETCH_ASSOC);
    echo "<h1>Finalizado</h1>";
    foreach($resultado as $item){
        $id_projeto = $item['id_projeto'];
        $nome_projeto = $item['nome_projeto'];
        $fk_id_usuario = $item['fk_id_usuario'];
        $fk_id_usuario = $item['fk_id_usuario'];
        $situacao = $item['situacao'];
        $descricao = $item['descricao'];
        $nome_usuario = $item['nome_usuario'];
        echo "
            <div class='cartoes'>
              <b>Nº: </b> <span class='id_projeto'>$id_projeto</span><br>
              <b>Nome do Projeto: </b> <span class='nome_projeto'>$nome_projeto</span><br>
              <b>Nome do Usuário: </b> <span class='nome_usuario'>$nome_usuario</span><br>
              <b>Descrição: </b> <span class='descricao'>$descricao</span><br>
              <b>Situação: </b> <span class='situacao'>$situacao</span><br>
              <b hidden>FK id usuário:</b> <span class='fk_id_usuario' hidden>$fk_id_usuario</span><br>
            </div> ";
    }
} catch (PDOException $erro) {
    echo "Falha ao consultar".$erro->getMessage();
}
?>