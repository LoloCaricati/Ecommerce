<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Página Inicial</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
    </head>
    <body>
        <?php
        
            echo"
                <header id= 'header' >
                    <nav class='container'>
                        <a  class='logo' href='./index.php'><img src='./img/logo_caricacto.png'></a>
                        <div class='menu'>
                            <ul class='grid'>
                                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                                <li><a class='title' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                                <li><a class='title' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></li>
                                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Seleção</a></li>
                            </ul> 
                        </div>
                        <div class='toggle icon-menu'></div>
                        <div class='toggle icon-close'></div>
                    </nav>
                </header>
                <main>
                    <div class='section' id='home'>
                        <div class='text'>
                            <h1>
                                Cactos e suculentas para seu jardim
                            </h1>
                            <p>
                                Plantas selecionadas especialmente para você de nossas estufas.
                            </p>
                            <a href='#'>Ver produtos</a>
                        </div>
                            <img src='./img/img_topo.png' alt='imagem'>
                        <div class='img'>
            
                        </div>
                    </div>
                </main>
                ";

        ?>
    </body>
</html>