<?php
session_start();

$user = $_SESSION['id_usuario'];
$nome = $_SESSION['nome_usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Encode Sans Semi Condensed' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/aprovAcordos.css">
    <title>Acordos - FiadoTec</title>
</head>

<body>
    <?php include('../layout/header.php'); ?>
    <div style="display: flex;margin:20px;">
        <a href="home.php" src="Home"> <i class="fa-regular fa-circle-left iconBack "></i></a>
        <p style="font-size:40px;width: 42  0px;">Solicitações de Acordos</p>
    </div>
    <div class="col-md-12">
        <div class="row" style="width: 100vw;">
            <div class="col-md-11 offset-md-1 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="card-body ">
                            <div class="container">

                                <div class="row">

                                    <div class="col-md-4" style="margin-top: 20px;">

                                        <p class="card-text mb-5"><b>Nome fantasia:</b></p>
                                        <p class="card-text mb-5"><b>CNPJ/CPF:</b></p>
                                        <p class="card-text "><b>Quantidade média de Funcionários:</b></p>
                                    </div>
                                    <div class="col-md-3" style="margin-top: 20px;">
                                        <p class="card-text mb-5"><b>Razão Social:</b></p>
                                        <p class="card-text"><b>Endereço:</b></p>
                                    </div>
                                    <div class="col-md-5 ">
                                        <h3 class="card-title proposta">Proposta</h3>
                                        <p class="card-text text-center">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Phasellus scelerisque ex purus,
                                            ut varius sem posuere ac. Aliquam rhoncus sodales lorem,
                                            a luctus mauris gravida iaculis. Maecenas a suscipit metus.
                                            Proin nec lectus vitae elit mollis suscipit non et purus.
                                            Sed eu arcu ut neque facilisis tempus vel et justo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-end">
                            <small class="text-muted">ID: 2222</small>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
<html>