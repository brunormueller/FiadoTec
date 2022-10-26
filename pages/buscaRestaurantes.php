<?php
session_start();

$user = $_SESSION['id_usuario'];
$nome = $_SESSION['nome_usuario'];
include('../conn/conn.php');
include('../classes/ClassUsuarios.php');
include('../classes/GMaps.php');

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMtmTcklgRxUxhOuIUbfFDedRgotcxgmI&callback=initMap" async defer></script>

    <title>Busca Restaurantes - FiadoTec</title>
    <style>
        #map {
            height: 40%;
            width: 50%;
            top: 5%;
            border-radius: 10px;
        }
    </style>
</head>


<body>
    <?php include('../layout/header.php'); ?>


    <h1>Restaurantes conveniados</h1>



<div class="col-md-6 offset-md-3" style="margin-top: 5%;" >
        <h3 style="width: 450px;">Selecione um dos restaurantes conveniados:</h3>
    <select class="form-select" aria-label="Default select example">
        <option selected disabled>Selecione um dos restaurantes conveniados</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    </div>
    <div class="offset-3 text-center" id="map"></div>


    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -26.484414,
                    lng: -49.080690
                },
                zoom: 14
            }); //-26.484414, -49.080690
        }
    </script>
</body>

</html>


<!-- onclick="this.style.cssText = 'border: 2px solid #96BED9;'" -->