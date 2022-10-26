<?php
session_start();

$user = $_SESSION['id_usuario'];
$nome = $_SESSION['nome_usuario'];
include('../conn/conn.php');
include('../classes/ClassUsuarios.php');

$busca = Usuarios::listar($conn);
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

    <link rel="stylesheet" href="../css/acordos.css">
    <title>Acordos - FiadoTec</title>
</head>

<body>
    <?php include('../layout/header.php'); ?>

    <div style="display: flex;margin:20px;">
        <a href="home.php" src="Home"> <i class="fa-regular fa-circle-left iconBack "></i></a>
        <p style="font-size:40px;width: 170px;">Acordos</p>
    </div>
    <div class="cards" data-action="1" onclick="test(this);">
        <div class="row">
            <?php
            $qtde_registros = count($busca);
            for ($i = 0; $i <  $qtde_registros; $i++) {
            ?>

                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../img/customax.png" style="background: white;border-radius: 0px 20px 20px 0px;margin: 10px 10px 10px -0.06em;" class="img-fluid" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title text-start" style="font-weight: 700;width: 309px;font-size: 35px;margin-inline: auto;"><?php echo $busca[$i]["nome_usuario"]; ?></h2>
                                <p class="card-text text-end" style="position: absolute; top: 168px; right: 10px;">
                                    <small class="text-muted">ID: <?php echo $busca[$i]["id_usuario"]; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

            }
            ?>

        </div>

    </div>

    <div class="col-md-7 col-sm-6 offset-md-7 offset-sm-6" id="dados_acordos">
        <div class="row">
            <h1 id="companyName">Customax Tecnologia</h1>

            <div class="row valor">
                <h3>Valor Base: R$18,00</h3>
            </div>

            <div class="row adicional">
                <h3>Aceita Adicional?</h3>
                <div class="form-check form-check-inline checkRadio ">
                    <input class="form-check-input radioyon" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label radioyon" style="font-size: 19px;" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline checkRadio ">
                    <input class="form-check-input radioyon" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" disabled>
                    <label class="form-check-label radioyon" style="font-size: 19px;" for="inlineRadio2">Não</label>
                </div>
            </div>
            <hr class="divider">
            <div class="row totMes">
                <h3>Total movimentado mês</h3>
                <h4>R$630,00</h4>
            </div>
            <div class="row totRef">
                <h3>Total refeições mês</h3>
                <h4>35</h4>
            </div>
        </div>
    </div>
    <script>
        $(".cards").on("click", function(e) {
            e.preventDefault();
            $(".cards").toggleClass("sai");
        });

        function test(element) {

            if (element.getAttribute('data-action') == 1) {
                document.getElementById("dados_acordos").style.opacity = "1";
                document.getElementById("dados_acordos").style.transition = "opacity 1s ease-out";
                element.setAttribute('data-action', 2);
            } else {
                document.getElementById("dados_acordos").style.opacity = "0";
                document.getElementById("dados_acordos").style.transition = "opacity 0.5s ease-out";
                element.setAttribute('data-action', 1);
            }
        }
    </script>


</body>

</html>


<!-- onclick="this.style.cssText = 'border: 2px solid #96BED9;'" -->