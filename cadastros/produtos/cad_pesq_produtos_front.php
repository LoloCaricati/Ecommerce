<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Produtos</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../img/logopeq_caricacto.png">
    </head>
    <body>
        <?php
            echo"
            <header id= 'header' >
                <nav class='container'>
                    <a  class='logo' href='../../index.php'><img src='../../img/logo_caricacto.png'></a>
                    <div class='menu'>
                        <ul class='grid'>
                            <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                            <li><a class='title' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                            <li><a class='title' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></li>
                            <li><a class='title' href='../../venda/selecao_produtos_front.php' target='_parent'>Seleção</a></li>
                        </ul> 
                    </div>
    
    
                    <div class='toggle icon-menu'></div>
                    <div class='toggle icon-close'></div>
                </nav>
            </header>";
        ?>

        <div class="container_paginas">

            <div class="pesq">
                <div class="pesquisa">
                    <form action="" method="post">
                    <div class="divisoes">
                        <div class="pesquisaBotao">
                            <button>
                                <img src="../../img/search.svg" alt="Lupa de Pesquisa">
                            </button>
                        </div>
                        <div class="pesquisaTexto">
                            <input type="text" name="textPesquisa" placeholder="Pesquise um produto especifico" maxlength="116">
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>

            <a class="links" href='cad_novo_produtos_front.php'>+ Adicionar Produto</a><br><br>

            <?php
                include "cad_pesq_produtos_back.php";

                if ($qtde == 0) {
                    echo "Não foi encontrado nenhum produto !!!<br><br>";
                    return;
                }

                // Começar tabela e criar o cabeçalho
                echo "
                <div class='tabela'>
                    <div class='fileira'>
                        <div class='cell cellMedia cellHeader'>
                            Id Produto
                        </div>
                        <div class='cell cellGrande cellHeader'>
                            Nome
                        </div>
                        <div class='cell cellGrande cellHeader'>
                            Estoque
                        </div>
                        <div class='cell cellEnorme cellHeader'>
                            Imagem
                        </div>
                        <div class='cell cellGrande cellHeader'>
                            Preço
                        </div>
                        <div class='cell cellGrande cellHeader'>
                            Alterar
                        </div>
                        <div class='cell cellGrande cellHeader'>
                            Excluir
                        </div>
                    </div>";

                    // Criar linhas com os dados dos produtos
                    foreach ($resultado_lista as $linha)
                    {
                        echo "
                        <div class='row'>
                            <div class='cell cellMedia'>
                                ".$linha['id_produto']."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['nome']."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['estoque']."
                            </div>
                            <div class='cell cellEnorme'>
                                ".'<img src="'.$linha['campo_imagem'].'" widht="13px" height="13px">'."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['preco']."
                            </div>
                            <div class='cell cellGrande'>
                                <a  class='cellGrande' href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                            </div>
                            <div class='cell cellGrande'>
                                <a  class='cellGrande' href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                            </div>
                        </div> "; 
                    } 
                // Fechando a tag da tabela
                echo "</div>";
            ?>    
        </div>
    </body>
</html>