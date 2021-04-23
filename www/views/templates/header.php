<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>

    <title>Projeto Php</title>
</head>

<body>
    <header class="jumbotron">
        <h1>Cabeçalho do Sistema MVC</h1>
    </header>

    <div class="row container-fluid">
        <nav class="navbar col-md-2">
            <ul class="navbar-nav">
                <h2>Menu</h2>
                <li class="nav-item">
                    <a id="home" class="nav-link" href="?controller=site&action=home">Home</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="?controller=site&action=about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a id="product" class="nav-link" href="?controller=site&action=products">Produtos e serviços</a>
                </li>
                <li class="nav-item">
                    <a id="contact" class="nav-link" href="?controller=site&action=contact">Contato</a>
                </li>
            
                <h4>Clientes</h4>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=register">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
                </li>

            </ul>
        </nav>

        <section class="col-md-9">