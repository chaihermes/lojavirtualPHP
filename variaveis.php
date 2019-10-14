<?php
    $nomeSistema = "Cervejas Artesanais";
    $usuario = ["nome"=>"Chaiana"];

    $nomeArquivo = "produto.json";

    $produtos = json_decode(file_get_contents($nomeArquivo), true);



    // $produtos = [
    //     ["nome"=>"Cerveja IPA", "preco"=> "17,00", "ml"=>500, "img"=>"images/ipa.jpg"],
    //     ["nome"=>"Cerveja Weiss", "preco"=> "18,00", "ml"=>500, "img"=>"images/weiss.jpg"],
    //     ["nome"=>"Cerveja Red Ale", "preco"=> "20,00", "ml"=>600, "img"=>"images/red.jpg"], /*aqui tem que ser , não ; */
    // ];

    $categorias = ["Cervejas Claras", "Cervejas Escuras"];
?>