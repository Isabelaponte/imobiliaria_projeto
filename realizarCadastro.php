<?php
    include("conexao.php");

    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

    $sql = "INSERT INTO inquilino(CPF, Nome, Email, Senha) VALUES($cpf, '$nome', '$email', '$senha')";

    /*if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }*/
  mysqli_close($conn);
?>