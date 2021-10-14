<?php
    include("conexao.php");

    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

    private $pdo;

    $sql = $pdo->prepare("SELECT CodInquilino FROM inquilino WHERE Email = $email AND Senha = $senha");
    $sql->execute();

    if ($sql->rowCount() > 0) 
    {
        //entrar no sistema (Sessao)
        $dado = $sql->fetch();
        session_start();
        $_SESSION['cod_inquilino'] = $dado['CodInquilino'];
        return true;//logado com sucesso
    }
    else 
    {
        return false;//nao foi possivel logar
    }
    
  mysqli_close($conn);
?>