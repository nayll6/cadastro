<?php

    include_once('config.php');

    if(isset($_POST['update'])){
       
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha',telefone='$telefone',genero='$genero',data_nascimento='$data_nascimento',cidade='$cidade',estado='$estado',endereco='$endereco' 
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: sistema.php");

?>
