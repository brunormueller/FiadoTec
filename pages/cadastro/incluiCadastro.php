<?php

include("../../conn/conn.php");

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$cpf_cnpj_usuario = $_POST['cpf_cnpj_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$razao_social_usuario = $_POST['razao_social_usuario'];
$endereco_usuario = $_POST['endereco_usuario'];
$telefone_usuario = $_POST['telefone_usuario'];

$valida_cpf = $conn->prepare(
    "SELECT
    *
    FROM
        usuarios
    WHERE
    cpf_cnpj_usuario = '$cpf_cnpj_usuario'"

);
$valida_cpf->execute();

$valida_email = $conn->prepare(
    "SELECT
    *
    FROM
        usuarios
    WHERE
    email_usuario = '$email_usuario'"

);
$valida_email->execute();

if($valida_cpf->rowCount() > 0) {
    echo "0_?_Já existe um cliente com este CPF/CNPJ!";
    
}
if($valida_email->rowCount() > 0) {
    echo "0_?_Já existe um cliente com este e-mail!";
}

$insert = $conn->prepare("INSERT INTO 
usuarios
(nome_usuario, email_usuario, cpf_cnpj_usuario, senha_usuario, razao_social_usuario, endereco_usuario, telefone_usuario)
VALUES
('$nome_usuario', '$email_usuario', '$cpf_cnpj_usuario','$senha_usuario','$razao_social_usuario', '$endereco_usuario', '$telefone_usuario')");

try {
    $execucao = $insert->execute();
} catch (PDOException $e) {
    $execucao = $e->getMessage();
    echo "0_?_" . $execucao;
}
echo "1_?_Usuário registrado com sucesso!";
