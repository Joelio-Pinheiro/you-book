<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adm.css">
    <title>Configurações</title>
</head>
<body>
    <div id="menu">
        <nav>
            <ul>
                <li id="btncadastrar"><a href="#">Cadastrar Produto</a></li>
                <hr>
                <li id="btneditar"><a href="#">Editar Produto</a></li>
                <hr>
                <li id="btnremover"><a href="#">Remover Produto</a></li>
            </ul>
            <div id="profile">
            </div>
        </nav>
    </div>
    <div id="cadastro">
        <h2 style="margin-top: 15px;">SHOES|CADASTRAR</h2>
        <div class="box">
            <form action="action.php?action=cadastrar" method="POST" enctype="multipart/form-data">
                <fieldset style="display: flex; flex-direction: column; border: 0;">
                    <label>
                        <span>Modelo:</span>
                        <br>
                        <input type="text" name="nome" required>
                        <span>Preço:</span>
                        <input type="number" name="preco" id="valor" min="0" required>
                    </label>
                    <label>
                        <span>Desconto:</span>
                        <br>
                        <input type="number" name="desconto" id="valor" min="0" max="90">
                    </label>
                    <label>
                        <span>Imagem 1:</span>
                        <input type="file" name="img1" class="img" required>
                    </label>
                    <label>
                        <span>Imagem 2:</span>
                        <input type="file" name="img2" class="img" required>
                    </label>
                        <input type="submit" value="Salvar" id="salvar">
                </fieldset>
            </form>
        </div>
    </div>
    <div id="editar">
        <h2 style="margin-top: 15px; margin-bottom: 25px;">SHOES|EDITAR</h2>
        <container id="calcados" style="max-height: none;">
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
            <div>
                <img src="produtos/jordan.png">
                <h4>Nike Jordan 2</h4>
                <p>R$199,00<p>
                <button class="alterar">Editar</button>
            </div>
        </container>
        </div>
    </div>
    <div id="remover">
        <h2 style="margin-top: 15px; margin-bottom: 25px;">SHOES|REMOVER</h2>
        <container id="calcados" style="max-height: none;">
        <?php
                $produto = "SELECT * FROM produtos";
                $result = mysqli_query($conexao, $produto);
                $linha = mysqli_fetch_assoc($result);
                $total = mysqli_num_rows($result);
                if($total > 0){
                    do{
                ?>
                <div>
                        <img src="<?=$linha['img1']?>">
                        <h4><?=$linha['nome']?></h4>
                        <p>R$<?=number_format($linha['preco'], 2, ',', '.')?>
                        <?php 
                        if($linha['oferta'] == 1){?>
                            (-<?=$linha['desconto']?>%)
                        <?php
                        }
                        ?>
                        <a href= "action.php?id=<?=$linha['id']?>&action=remover"><button class="alterar">Remover</button>
                    </p>
                    </a>
                </div>
                <?php
                    }while($linha = mysqli_fetch_assoc($result));
                }
                ?>
        </container>
    </div>
<script src="js/adm.js"></script>
</body>
</html>