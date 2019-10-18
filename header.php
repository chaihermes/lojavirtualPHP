<?php include_once("config/variaveis.php")?>

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
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
</header>

<!--sub menu -->
<div class="navbar bg-dark row justify-content-around"> 
    <ul class="nav justify-content-between">
        <?php if(isset($categorias) && $categorias != []) { ?>
            <?php foreach($categorias as $categoria) {?>
                <li class="nav-item"><a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                </li>
                <?php } ?>
            <?php } ?>
    </ul>
</div>
<!-- sub menu -->