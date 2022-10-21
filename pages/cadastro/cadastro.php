<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiadoTec</title>
    <script src="../../js/validarform.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.35/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
</head>

<body>
    <header class="site-header sticky-top py-1" style="background-color: black;">
        <nav class="navbar p-5" style="background-color: #FEC63F; top: -4px; ">
            <div class="container">

                <a class="navbar-brand" href="#">
                    <img src="../img/fiadotec1.png" alt="Logo" class="logofiado mx-auto text-center">

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
            <a href="" class="py-2 d-none d-md-inline-block" style="text-decoration: none ; color: white">Sobre nós</a>
            <a href="" class="py-2 d-none d-md-inline-block" style="text-decoration: none ; color: white">Institucional</a>
            <a href="" class="py-2 d-none d-md-inline-block" style="text-decoration: none ; color: white">Contato</a>
            <div class="py-2 d-none d-md-inline-block"></div>
        </nav>
    </header>


    <br><br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto mainform" style="margin-bottom: 50px;">
            <form action="" class="needs-validation" method="post" id="cadastroForm_id">

                <div class="form-group tipoUser">


                    <input type="radio" name="tipo" id="tipoFornecedor" value="Fornecedor">
                    <span style="margin-right: 68px;" for="tipoFornecedor">Fornecedor</span>


                    <input type="radio" name="tipo" id="tipoCliente" value="Cliente">
                    <span class="ml-3" for="tipoCliente">Cliente</span>

                </div> <br>
                <div class="form-group ">
                    <input type="email" class="form-control obrigatorios" required id="email_usuario" name="email_usuario" placeholder="Digite seu Email">
                </div><br>
                <div class="form-group ">
                    <input type="password" class="form-control obrigatorios" required id="senha_usuario" name="senha_usuario" placeholder="Digite uma Senha">
                </div><br>
                <div class="form-group ">
                    <input type="text" class="form-control obrigatorios" id="nome_usuario" required name="nome_usuario" placeholder="Digite o nome Fantasia">
                </div><br>
                <div class="form-group ">
                    <input type="text" class="form-control obrigatorios" required id="razao_social_usuario" name="razao_social_usuario" placeholder="Digite sua Razão Social">
                </div><br>
                <div class="form-group ">
                    <input type="text" class="form-control obrigatorios cpf_cnpj cpfCnpj" required id="cpf_cnpj_usuario" name="cpf_cnpj_usuario" placeholder="Digite o CPF/CNPJ">
                </div><br>
                <div class="form-group ">
                    <input type="text" class="form-control obrigatorios" required id="endereco_usuario" name="endereco_usuario" placeholder="Digite seu Endereço">
                </div><br>
                <div class="form-group ">
                    <input type="text" class="form-control obrigatorios phone" required id="telefone_usuario" name="telefone_usuario" placeholder="Digite seu Telefone">
                </div><br>
                <input class="form-check-input obrigatorios" required type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Li e estou de acordo com o <a href="">Termo de Uso</a> e <a href="">Política de Privacidade</a>
                    .

                </label>
                <br>
                <label class="mt-4" for=""><b>Já possui um login?</b><a class="ms-2" style="text-decoration: none;" href="../login/login.php">Acesse aqui</a></label>
                <br><br>
                <button type="button" id="enviar_cadastro" class="btn btn-dark form-control shadow mb-5">Registrar</button>
            </form>
        </main>

        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div> <br><br><br>

    <script src="cadastro.js"></script>
    <script src="../../js/valida_cpf_cnpj.js"></script>
</body>



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
        <a class="text-reset fw-bold" href="https://github.com/burnormueller">Bruno Mueller</a>
    </div>
    <!-- Copyright -->
</footer>

</html>