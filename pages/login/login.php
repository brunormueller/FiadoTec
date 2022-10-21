<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiadoTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../../css/login.css">
    <script src="../../js/validarform.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.35/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

</head>

<body>
    <header class="site-header sticky-top py-1 header" style="background: black;">
        <nav class="navbar p-5" style="background-color: #FEC63F; top: -4px; ">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <img src="../img/fiadotec2.png" alt="Logo" width="100" height="90" class="logofiado mx-auto text-center">

                </a>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Voltar para Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="py-2 d-none d-md-inline-block"></div>
            <a href="" class="py-2 d-none d-md-inline-block header-text nav-foo">Sobre nós</a>
            <a href="" class="py-2 d-none d-md-inline-block header-text nav-foo">Institucional</a>
            <a href="" class="py-2 d-none d-md-inline-block header-text nav-foo">Contato</a>
            <div class="py-2 d-none d-md-inline-block"></div>
        </nav>

    </header>

    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div id="div_login">
            <main class="form-signin w-100 m-auto mainform">
                <form action="" class="needs-validation" method="post" id="loginForm_id">
                    <div class="form-group tipoUser">
                        <input type="radio" name="tipo" id="tipoFornecedor" value="Fornecedor">
                        <span style="margin-right: 68px;" for="tipoFornecedor">Fornecedor</span>

                        <input type="radio" name="tipo" id="tipoCliente" value="Cliente">
                        <span class="ml-3" for="tipoCliente">Cliente</span>

                    </div> <br>
                    <div class="form-group ">
                        <input type="email" class="form-control obrigatorios" autocomplete="off" id="email_usuario" required name="email_usuario" placeholder="Digite seu Email">
                        <div class="invalid-feedback">Preencha o campo!</div>
                    </div><br>
                    <div class="form-group">
                        <input type="password" class="form-control obrigatorios" id="senha_usuario" name="senha_usuario" required placeholder="Digite uma Senha">
                        <div class="invalid-feedback">Preencha o campo!</div>
                    </div>
                    <label class="mt-4" for=""><b>Ainda não possui conta?</b><a class="ms-2" style="text-decoration: none;" href="./../cadastro/cadastro.php">Cadastre-se aqui</a></label>
                    <br><br>
                    <div class="btn-load">
                    <button type="button" id="enviar_Login" value="Entrar" class="btn btn-dark form-control shadow">Entrar</button>
                    </div>
                </form>
            </main>
        </div>

        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div> <br><br><br>
    <script src="login.js"></script>
    <footer class="text-center text-lg-start bg-light text-muted fixed-bottom" id="footer">


        <!-- Section: Links  -->
        <section id="footer_section" class="bg-light">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i><b>Fiado Tec</b>
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 " id="div_footer">
            © 2021 Copyright:
            <a class=" text-reset fw-bold" href="https://github.com/burnormueller">Bruno Mueller</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>




</html>