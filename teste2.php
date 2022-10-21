<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        li {
            list-style-type: none;
            position: relative;
            margin: 2px;
            padding: 0.5em 0.5em 0.5em 2em;
            background: lightgrey;
            font-family: sans-serif;
        }

        li.done {
            background: #ccff99;
        }

        
    </style>
</head>

<body>
    <ul>
        <li>Comprar Leite</li>
        <li>Levar o cachorro para passear</li>
        <li>Exercitar-se</li>
        <li>Escrever codigo</li>
        <li>Tocar musica</li>
        <li>Relaxar</li>
    </ul>

    <script>
        // function test(element) {
        //   var card = $("#card");
        //   if (element.getAttribute("data-action") == 1) {
        //     card.css("--bg-card:red");
        //     element.setAttribute("data-action", 2);
        //     e.stopPropagation();
        //   } else {
        //     alert("Executando a ação 2...");
        //     element.setAttribute("data-action", 1);
        //   }
        // }
        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
            if (ev.target.tagName === 'LI') {
                ev.target.classList.toggle('done');
            }
        }, false);
    </script>
</body>

</html>