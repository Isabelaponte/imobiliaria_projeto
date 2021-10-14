<?php
    include("conexao.php");

    //recebe os dados que foram colocados no cadastro

    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

    // verifica se os dados deste cadastro já existem

    private $pdo; 
    
    $sql = $pdo-> prepare("SELECT CodInquilino FROM inquilino WHERE Email = $email");
    $sql-> execute();

    if ($sql->rowCount() > 0) {
          return false;
    }
    else
    {
      //se não, cadastrar
      $sql = "INSERT INTO inquilino(CPF, Nome, Email, Senha) VALUES($cpf, '$nome', '$email', '$senha')";
      $sql->execute();
      return true;
    }



    /*if (mysqli_query($conn, $sql)) 
      {
        echo "New record created successfully";
      } 
      else 
      {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }*/

  mysqli_close($conn);
?>