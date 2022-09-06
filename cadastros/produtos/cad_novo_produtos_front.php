<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/logopeq_caricacto.png">

    <script src="../../js/produto_photo.js" defer></script>
    
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
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
        <div class="titulo">
            <!--<img class ="img_titulo" src="../../img/cacto.png">-->
            <p class="cadastro_titulos">Cadastre-se na loja</p>
             <!--<img class ="img_titulo" src="../../img/cacto.png">-->
        </div>
        
 
        <div class="form_cad_prod">             
            <form enctype="multipart/form-data" action="cad_novo_produtos_back.php" method="post">
                <div class="input-group">
                    <div class="input-box">
                        <label>
                            <!-- <strong class="form_alinha">Nome:</strong><br /> -->

                            <label class="form_alinha">Nome </label>
                            <input type="text" name="nome" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <!--<strong>Descrição:</strong><br /> -->
                                
                            <label class="form_alinha">Descrição:</label>
                            <input type="text" name="descricao" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <!-- <strong>Estoque:</strong><br /> -->

                            <label class="form_alinha">Estoque:</label>
                            <input type="number" name="estoque" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <!-- <strong>Código Visual:</strong><br />  -->

                            <label class="form_alinha">Código Visual:</label>
                            <input type="text" name="codigovisual" maxlength="13" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <div>
                        <strong>Imagem</strong><br> 
                            <div class="max-width">
                                <div class="imageContainer">
                                    <img src="../../img/camera.svg" alt="Selecione uma imagem para o produto" id="imgProduto">
                                </div>
                            </div>
                            <div class="answer">
                                <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label>
                           <!-- <strong>Preço:</strong><br /> -->
                            <label class="form_alinha">Preço </label>
                            <input type="text" name="preco" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <!-- <strong>Custo:</strong><br /> -->

                            <label class="form_alinha">Custo: </label>
                            <input type="text" name="custo"  /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                           <!-- <strong>Margem de Lucro:</strong><br /> -->

                            <label class="form_alinha">Margem Lucro: </label>
                            <input type="text" name="margem_lucro" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <!-- <strong>ICMS:</strong><br /> -->

                            <label class="form_alinha">ICMS </label>
                            <input type="text" name="icms" /><br />
                            <br />
                        </label>
                    </div>
                </div>
                    

                <div class="buttons">
                    <input type="submit" name="button" id="button" value="Enviar" />
                    <a id="button" href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>