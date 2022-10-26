<?php
class Usuarios
{
    public static function listar($conn)
    {
        $busca = $conn->prepare("SELECT * FROM usuarios WHERE status_usuario = 1");
        try {
            $busca->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $dados = array();

        while ($row = $busca->fetch(PDO::FETCH_ASSOC)) {

            $dadosBuscaRow = array(
                'id_usuario' => $row['id_usuario'],
                'nome_usuario' => $row['nome_usuario'],
                'email_usuario' => $row['email_usuario'],
                'razao_social_usuario' => $row['razao_social_usuario'],
                'cpf_cnpj_usuario' => $row['cpf_cnpj_usuario'],
                'endereco_usuario' => $row['endereco_usuario'],
                'telefone_usuario' => $row['telefone_usuario'],
            );
            array_push($dados, $dadosBuscaRow);
        }
        return $dados;
    }
}
