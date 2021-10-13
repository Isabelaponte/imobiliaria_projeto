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
                <a class="navbar-brand" href="#">IMAGEM LOGO</a>
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
                            <a class="nav-link" href="#">Entrar</a>
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

    <main role="main" class="text-center">
        <section class="jumbotrom text-center">
            <div class="py-5 text-center">
                <h1 class="jumbotron-heading">Entrar</h1>
            </div>
        </section>
    </main>

    <!--//MAIN-->

    <!--CADASTRO-->
    <section class="py-5 container">

        

        <form action="realizarLogin.php" class="needs-validation" method="POST" >
            <div class="form-group col-6 mx-auto">
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email"
                        placeholder value required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder value required>
                </div>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-outline-dark btn-lg btn-block" type="submit" formaction="#"
                    value="Cadastrar">Entrar</button>
                </div>
                
    
            </div>
    
        </form>
    </section>
    

    <footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Voltar ao topo</a>
			</p>
			<p>
				Esse é um projeto de exemplo  criado pela turma de Programação Web II do Etim de Desenvolvimento de Sistemas. &copy; Todos os direitos reservados.
			</p>
			<p>
				Visite <a href="https://br.pinterest.com/eucarolsoaress/vsco-girl/" target="_blank">nossa pasta</a> e conheça mais um pouco sobre a estetica de uma VSCO Girl.
			</p>
		</div>
	</footer>
    <!--//CADASTRO-->
    
    <!--importação js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>