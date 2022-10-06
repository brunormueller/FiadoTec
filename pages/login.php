<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiadoTec</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header  class="site-header sticky-top py-1" style="background-color: black;">
    <nav class="navbar p-5" style="background-color: #FEC63F;">
        <div class="container">
            
            <a class="navbar-brand" href="#">
                <img src="../img/fiadotec1.png" alt="Logo"  class="logofiado mx-auto text-center">
               
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
        <main class="form-signin w-100 m-auto mainform">
            <form action="" method="post" id="form_id">
                <div class="form-group tipoUser">
                    

                    <input type="radio" name="tipo" id="tipoFornecedor" value="Fornecedor">
                    <span style="margin-right: 68px;" for="tipoFornecedor">Fornecedor</span>
                   
                    <input type="radio" name="tipo" id="tipoCliente" value="Cliente">
                    <span class="ml-3" for="tipoCliente">Cliente</span>
                    
                </div> <br>
                <div class="form-group shadow">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email">
                </div><br>
                <div class="form-group shadow">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma Senha">
                </div><br>
                <div class="form-group shadow">
                    <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia" placeholder="Digite o nome Fantasia">
                </div><br>
                <div class="form-group shadow">
                    <input type="text" class="form-control" id="razao" name="razao" placeholder="Digite sua Razão Social">
                </div><br>
                <div class="form-group shadow">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF/CNPJ">
                </div><br>
                <div class="form-group shadow">
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu Endereço">
                </div><br>
                <div class="form-group shadow">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu Telefone">
                </div><br>
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Li e estou de acordo com o <a href="">Termo de Uso</a> e <a href="">Política de Privacidade</a>
                    .

                </label>
                <br><br>
                <button type="submit" class="btn btn-dark form-control shadow">Registrar</button>
            </form>
            </main>
        
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div> <br><br><br>
    
</body>
<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5" id="footer">
        <div class="col mb-3 mt-3">
            <p>Contato:</p>
            <p>(47)3276-5463</p>
        </div>
        <div class="col mb-3"></div>
        <div class="col mb-3 mt-3">
            <h5>Páginas</h5>
            <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
        </div>
        <div class="col mb-3 mt-3">
        <h5>Páginas</h5>
            <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
        </div>
        <div class="col mb-3 mt-3">
        <h5>Páginas</h5>
            <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
        </div>

    </footer>

</html>