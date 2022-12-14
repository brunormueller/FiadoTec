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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/cadastro.css">


    <title>Home - FiadoTec</title>
</head>

<body>
    <?php include('../layout/header.php'); ?>
   
    <h1>Bem vindo, <?php echo $nome?></h1>
    <ul class="offset-md-11 profile" >
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="../img/customax.png" id="pic_profile" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-dark">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <li><hr class="dropdown-divider"></li>
            <a class="dropdown-item" href="../pages/login/login.php">Log Out</a>
        </div>
        </li>
    </ul>
    <div class="col-md-4 offset-md-8 col-sm-3 col-xs-2 " style="width: 341px;margin-top: 120px;">
        <div class="linha"></div>
        <h2>Cobrar</h2>
        <h3>Para efetuar a cobrança do cliente CREDTECH, escaneie o QR CODE.</h3>
        <?php include_once('../layout/dark-light.php'); 
        ?>
        <div class="qr-code"></div>
        <button class="btn-qr shadow" type="button">ESCANEAR</button>
    </div>
    <?php include('../layout/footer.php'); ?>
</body>

</html>