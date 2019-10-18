<?php

session_start(); //avisa o sistema que a sessão vai começar.Todos arquivos que precisa usar session, tem que dar o session_start antes pra ele poder rodar.

    $nomeSistema = "Cervejas Artesanais";
    //$usuario = ["nome"=>"Chaiana"];
    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : [];    //se existir a sessão usuário, eu vou atribuir o resultado para dentro da variável. Entre o $_SESSION e o [] não pode ter espaço, se tiver dá erro.

    $nomeArquivo = __DIR__."/../produto.json"; //DIR mostra o caminho onde está armazenado o arquivo // as barras servem pra sair da pasta

    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    //echo $nomeArquivo;


    // $produtos = [
    //     ["nome"=>"Cerveja IPA", "preco"=> "17,00", "ml"=>500, "img"=>"images/ipa.jpg"],
    //     ["nome"=>"Cerveja Weiss", "preco"=> "18,00", "ml"=>500, "img"=>"images/weiss.jpg"],
    //     ["nome"=>"Cerveja Red Ale", "preco"=> "20,00", "ml"=>600, "img"=>"images/red.jpg"], /*aqui tem que ser , não ; */
    // ];

    $categorias = ["Cervejas Claras", "Cervejas Escuras"];
?>