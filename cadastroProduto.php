<?php 

function cadastarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
    $nomeArquivo = "produto.json";

    if(file_exists($nomeArquivo)){
        //abrindo e pegando informações do arquivo json
        $arquivo = file_get_contents($nomeArquivo);
        //transformar o arquivo json em array
        $produtos = json_decode($arquivo, true); //coloca o true para confirmar que quer transformar em array
        //adicionando um novo produto na array quee stava dentro do aruivo:
        $produtos[] = ["nome" => $nomeProduto, "preco" => $precoProduto, "desc" => $descProduto, "img" => $imgProduto];

        $json = json_encode($produtos);
        //salvando o json dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json);
        //retorno para o usuário
        if($deuCerto){
            return "Produto cadastrado com sucesso!";
        } else {
            return "Não foi possível cadastrar o produto.";
        }

        //var_dump($produtos); //a resposta dada é um objeto: array(1) { [0]=> object(stdClass)#1 (4) { ["nome"]=> string(9) "Produto 1" ["preco"]=> string(2) "17" ["desc"]=> string(12) "Cerveja Sour" ["img"]=> string(0) "" } }
        
        //depois do true, agora é um array: array(1) { [0]=> array(4) { ["nome"]=> string(9) "Produto 1" ["preco"]=> string(2) "17" ["desc"]=> string(12) "Cerveja Sour" ["img"]=> string(0) "" } }

    } else {
        $produtos = [];
        //array_push() dá o mesmo resultado que a variável $produtos. Porém dessa maneira, é mais custoso para o PHP, $produtos = ..... é mais rápido para rodar.
        $produtos[] = ["nome" => $nomeProduto, "preco" => $precoProduto, "desc" => $descProduto, "img" => $imgProduto];
        // var_dump($produtos);
        //transformando array em json
        $json = json_encode($produtos);
        //quando cadastra um novo produto no site e dá um var_dump aparece: string(66) "[{"nome":"Produto 1","preco":"14","desc":"Cerveja Sour","img":""}]" -> um json
        //var_dump($json);
        //salvando o json dentro de um arquivo
        $deuCerto = file_put_contents($nomeArquivo, $json); //a função file_put_content pode retornar um bool e pode retornar pro usuário o produto cadastrado com sucesso, mesmo dando algum erro na função

        if($deuCerto){
            return "Produto cadastrado com sucesso!";
        } else {
            return "Não foi possível cadastrar o produto.";
        }
        
    }

}

//teste pra ver se a variável $_POST não está vazia e o código vai rodar certo. Valida o POST. Quando tem informações ele retorna array(1) { [0]=> array(4) { ["nome"]=> string(9) "Produto 1" ["preco"]=> string(2) "15" ["desc"]=> string(12) "Cerveja Sour" ["img"]=> string(0) "" } }
// esse if que guarda as informações do formulário.
if($_POST){
  
    // var_dump($_FILES); visualiza o que tem dentro do FILES.
    // exit;

    //salvando arquivo
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTmp = $_FILES['imgProduto']['tmp_name'];
    $dataAtual = date("d-m-y");
    $caminhoSalvo = 'images/'.$dataAtual.$nomeImg; // é possível acrescentar data e horário para não haver o risco de ter dois arquivos com o mesmo nome e um substituir o outro, sem querer.
    $linkImg = $dataAtual.$nomeImg;
    $deuCerto = move_uploaded_file($localTmp, $caminhoSalvo);
    //exit;

    echo cadastarProduto($_POST['nomeProduto'], $_POST['descProduto'], $linkImg, $_POST['precoProduto']);
}
//$caminhoSalvo agora as imagens ficam linkadas diretamente por esse link.
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <title>Cadastro Produto</title>
</head>
<body>
    <?php  include_once("header.php"); ?>
    <main class="container"> 
        <div class="row">
            <div class="col-12">
                <h1> Cadastro de Produto </h1>
            </div>
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
