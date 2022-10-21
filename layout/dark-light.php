<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/toggle.css">
    <title>Document</title>
</head>

<body>
<div class="container toggle_position" style="position:absolute;left:93.5%;top:17%;width:10px">
        <div class="toggleWrapper">
            <input onclick="darkMode()" type="checkbox" class="dn" id="dn">
            <label for="dn" class="toggle">
                <span class="toggle__handler">
                    <span class="crater crater--1"></span>
                    <span class="crater crater--2"></span>
                    <span class="crater crater--3"></span>
                </span>
                <span class="star star--1"></span>
                <span class="star star--2"></span>
                <span class="star star--3"></span>
                <span class="star star--4"></span>
                <span class="star star--5"></span>
                <span class="star star--6"></span>
            </label>
        </div>
</div>
    
    <script>
        function darkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
</body>

</html>