<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto</title>
    <script src="https://kit.fontawesome.com/44147d9e89.js" crossorigin="anonymous"></script><!--icon-->
    <link rel="stylesheet" href="estilo/style.css"/><!--css-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"><!--font-->
    <meta charset="UTF-8"><!--letra-->
    <meta name="description" content="Free Web tutorials"><!--descricao-->
    <meta name="keywords" content="HTML, CSS, JavaScript"><!--palavra-chave-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--compatibilidade-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--escala-->
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
             
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="depoimentos">Depoimentos</a></li>
                    <li><a href="servicos">Serviço</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="depoimentos">Depoimentos</a></li>
                    <li><a href="servicos">Serviço</a></li>
                </ul>
            </nav>
        <div class="clear"></div>
        </div><!--center-->
    </header>

    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>
    <footer>
        <div class="center">
            <p>Todos os direitos reservado - Eduardo</p>
        </div><!--center-->
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    
    <script src="js/slider.js"></script>
</body>
</html>