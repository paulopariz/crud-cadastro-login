<?php
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        
        $sqlInsert = "UPDATE tb_cadastros 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: lista.php');

?>