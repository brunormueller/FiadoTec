<?php
include("../../conn/conn.php");
session_start();


if ((isset($_POST['email_usuario'])) and ($_POST['senha_usuario'])) {

        $email_usuario = $_POST['email_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $busca = $conn->prepare("SELECT * FROM usuarios WHERE email_usuario = :email_usuario
        AND senha_usuario = :senha_usuario");
        $busca->bindParam(':email_usuario', $email_usuario);
        $busca->bindParam(':senha_usuario', $senha_usuario);

        try {
                $execucao = $busca->execute();
        } catch (PDOException $e) {
                $execucao = $e->getMessage();
        }

        if ($execucao == 1) {

                if ($busca->rowCount() == 0) {
                        echo "0_?_Login ou Senha Incorretos!";
                } else {

                        $row_usuario = $busca->fetch(PDO::FETCH_ASSOC);
                        $id_usuario = $row_usuario['id_usuario'];
                        $email_usuario = $row_usuario['email_usuario'];
                        $status_usuario = $row_usuario['status_usuario'];
                        $nome_usuario = $row_usuario['nome_usuario'];

                        if ($status_usuario == 0) {
                                echo "0_?_Usuário Inativo!";
                        } else {
                                $_SESSION['id_usuario'] = $id_usuario;
                                $_SESSION['email_usuario'] = $email_usuario;
                                $_SESSION['status_usuario'] = $status_usuario;
                                $_SESSION['nome_usuario'] = $nome_usuario;
                                $_SESSION['logado'] = 1;


                                echo "1_?_Logado!";
                        }
                }
        } else {
                echo "0_?_" . $execucao;
        }
} else {
        echo "0_?_Não existe Usuário ou Senha!";
}
