<?php

    class Usuario
    {
        private $pdo;
        public $msgErro = "";

        public function conectar()
        {
            global $pdo;
            global $msgErro;
            
            try 
            {
                $pdo = new PDO("mysql:dbname=".$db.";host=".$host, $usuario, $senha);
            } 
            catch (PDOException $e) 
            {
                $msgErro = $e->getMessage();
            }
        }

        public function cadastrar($nome, $cpf, $email, $senha)
        {
            global $pdo;
            $sql = $pdo-> prepare("SELECT CodInquilino FROM inquilino WHERE Email = :e");
            $sql->bindValue(":e", $email);
            $sql-> execute();

            if ($sql->rowCount() > 0) {
                return false;
            }
            else
            {
            //se não, cadastrar
            $sql = $pdo->prepare("INSERT INTO inquilino(CPF, Nome, Email, Senha) VALUES(:c, :n, :e, :s)");

            $sql->bindValue(":c", $cpf);
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s",md5($senha));

            $sql->execute();
            return true;
            }
        }

        public function login($email, $senha)
        {
            global $pdo;

            $sql = $pdo->prepare("SELECT CodInquilino FROM inquilino WHERE Email = :e AND Senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));

            $sql->execute();

            if($sql->rowCount() > 0)
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
        }
    }
    

?>