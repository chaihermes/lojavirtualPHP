<?php
    $nomeSistema = "Cervejas Artesanais";
    $usuario = ["nome"=>"Chaiana"];
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
    <header class="navbar">
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario != []) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cervejas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá, <?php echo $usuario["nome"]; ?></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                <div class="col-lg-3 card text-center">
                    <h2>IPA</h2>
                    <img src="images/ipa.jpg" class="card-img-top" alt="imagemCursoFullStack">
                    <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>      

                <div class="col-lg-3 card text-center">
                    <h2>Weiss</h2>
                    <img src="images/weiss.jpg" class="card-img-top" alt="imagemCursoFullStack">
                    <div class="card-body">
                        <h5 class="card-title">Weiss</h5>
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="col-lg-3 card text-center">
                    <h2>Red</h2>
                    <img src="images/red.jpg" class="card-img-top" alt="imagemCursoFullStack">
                    <div class="card-body">
                        <h5 class="card-title">Red</h5>
                        <p class="card-text">R$15,00</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>



            </div>   
        </section>

    </main>








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