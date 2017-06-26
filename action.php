<?php
  	$con_string = "host='localhost' port='5432' dbname='test_php' user='postgres' password='123'";
  	$conn = pg_connect($con_string);

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO pessoa (cpf, nome, idade) VALUES ('$cpf', '$nome', '$idade')";
    pg_query($conn, $sql);

    $sql = "INSERT INTO cidade (nome, estado) VALUES ('$cidade', '$estado', $cpf)";
    pg_query($conn, $sql);

    $sql = "INSERT INTO endereco (rua, numero, bairro, cep) VALUES ('$rua', '$numero', '$bairro', '$cep', $cpf)";
    pg_query($conn, $sql);

    $sql = "INSERT INTO telefone (telefone) VALUES ('$telefone', $cpf)";
    pg_query($conn, $sql);

    pg_close($conn);
  
?>
