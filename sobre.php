<?php 
    session_start();   
    include("realizarLogin.php");
?>

<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- importação CSS -->
    <link rel="stylesheet" href="css/main.css">

    <title>Imobiliária_projeto</title>
</head>

<body>

    <!--HEADER-->
    <div id="header">
        <div class="container center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">IMAGEM LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entrar.php">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!--//HEADER-->

    <!--MAIN-->

    <main role="main">
        <section class="jumbotrom container">
            <div class="py-5 ">
                <h1 class="jumbotron-heading">Sobre</h1>
                <p class="lead">O VIJIL é um site de imobiliária criado pelos alunos Isabela de Ponte, Livia Oliveira, Julia Gomes, João Inoue e Vinicius Alves com a finalidade de produzir um projeto para TCC para conclusão do técnico em Desenvolvimento de Sistemas.</p>
            </div>
        </section>
    </main>

    <!--//MAIN-->
    
    <!--importação js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>