<?php
    $nomeSistema = "Cursos CH";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">Cursos</li>
                <li class="nav-item">Login</li>
                <li class="nav-item">Cadastrar</li>
            </ul>
        </nav>
    
    </header>
    <!-- <?php
        $nome = "Chaiana";
        $idade = 33;
        $usuario = ["Chaiana", "Hermes", 33, ["música", "café", "cachorro"]]; //array pode ter vários tipos de dados diferentes. Array numérico.
        
        $usuarioDois = ["nome"=>"Chaiana", "sobrenome"=>"Hermes"]; //array associativo.
        echo $nome; //; é obrigatório
        
        //var_dump($usuario); //imprimi todo o array

        //$usuario[] = "chá"; //adiciona dados na última posição do array.
        //$usuario[3][] = "chá"; //adiciona dados em um local específico (dentro da string da posição 3).
        //echo "<br>"; //quebra de página
        //var_dump($usuario);

        //echo $usuario[3][1]; //para imprimir uma posição dentro do segundo array.

        //echo $usuarioDois["sobrenome"]; //precisa especificar a posição que quer imprimir.

        echo "<h1>".$usuario[0]." ".$usuario[1]."</h1>"; //concatenar strings => Chaiana Hermes em título do html.
        
    ?> -->
</body>
</html>