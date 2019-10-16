<?php 
//cadastro de usuário no banco de dados para testar se o login é válido
$usuario = ["email" => "chaianah@gmail.com", "senha" => '$2y$10$A5rUqZ8uWIuFscieKjnP9Oc0lG4c8t9nEfDKb9C/Mn2a2LhzpFhT2'];

if($_POST){ //verifica se existe a informação. POST sempre existe.
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //validando e-mail
    if($email == $usuario['email']){
        //validando a senha
        if(password_verify($senha, $usuario['senha'])){ //verifica se a senha é igual a cadastrada
            //criando uma sessão para o usuário específico:
            session_start();
            $_SESSION['usuario'] = ["nome" => "Chaiana"];
            //se email e senha conferem, vai redirecionar o usuário para a página que queremos mandar ele:
            header('Location:index.php');
        } else {
            echo "E-mail ou senha inválidos";
        }
    } else {
        echo "E-mail ou senha inválidos";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <title>Login</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <div class="form-group">
                <label for="email">E-mail </label>
                <input type="email" name="email" id="email" class="form-control" required> <!-- o id precisa ser igual ao for -->
            </div>
            <div class="form-group">
                <label for="senha">Senha </label>
                <input type="password" name="senha" id="senha" class="form-control" required> <!-- a senha sempre deve ser salva no json de forma criptografada para evitar roubo de senhas -->
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Logar</button>
            </div>
        </form>
    </main>

</body>
</html>

<!-- duas funções para criptografar os dados password_hash criptografa senhas -->