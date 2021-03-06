<?php
    include("../includes/conexao.php");
    $id = $_GET["id"];
    $produto = mysqli_query($conexao, "select * from tb_produtos where id='$id'");
    $prodSselecionado = mysqli_fetch_assoc($produto);
?>
<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
                <div class="box-header">
                    <i class="icon-sign-blank"></i>
                    <h5>Produtos</h5>
                    <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                        <i class="icon-reorder"></i>
                    </button>
                </div>
                <div class="box-hide-me box-content collapse in">
                    <form method="post" action="produtos/update.php">
                        <legend class="lead">
                            Selecione a Subcategoria
                            <div class="controls">
                                <select id="subcategoria" name="subcategoria" class="span5" type="text" value="" autocomplete="false">
                                    <?php
                                    include("../includes/conexao.php");
                                    $subcategorias = mysqli_query($conexao,"select * from tb_subcategorias");
                                    while($listar = mysqli_fetch_assoc($subcategorias)){
                                        if($listar["id"] == $prodSselecionado["id_subcategoria"]){
                                            echo '<option value="'.$listar["id"].'" selected>'.$listar["subcategoria"].'</option>';
                                        }else{
                                            echo '<option value="'.$listar["id"].'">'.$listar["subcategoria"].'</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>
                            </div>
                        </legend>
                        <legend class="lead">
                            Descri????o Curta
                            <div class="controls">
                                <input id="descri_curta" name="descri_curta" class="span5" type="text" value="<?php echo $prodSselecionado["descricao_curta"] ?>" autocomplete="false">
                            </div>
                        </legend>
                        <legend class="lead">
                            Descri????o Longa
                            <div class="controls">
                                <textarea id="descri_longa" name="descri_longa" class="span5" type="text" value="" autocomplete="false"><?php echo $prodSselecionado["descricao_longa"] ?></textarea>
                            </div>
                        </legend>
                        <legend class="lead">
                            Valor
                            <div class="controls">
                                <input id="valor" name="valor" class="span5" type="text" value="<?php echo $prodSselecionado["valor"] ?>" autocomplete="false">
                                <input type="hidden" name="id" id="id" value="<?php echo $prodSselecionado["id"]; ?>">
                            </div>
                            <footer id="submit-actions" class="form-actions">
                                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Salvar</button>
                                <button type="reset" class="btn" name="action" value="CANCEL">Cancelar</button>
                            </footer>
                        </legend>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span16">
            <div class="box">
                <div class="box-header">
                    <i class="icon-sign-blank"></i>
                    <h5>Subcategorias Cadastradas</h5>
                    <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me2">
                        <i class="icon-reorder"></i>
                    </button>
                </div>
                <div class="box-hide-me2 box-content collapse in">
                    <table class="table table-hover tablesorter">
                        <thead>
                            <tr>
                                <th class="header headerSortDown">ID</th>
                                <th class="header">Subcategoria</th>
                                <th class="header">Descri????o Curta</th>
                                <th class="header">Descri????o Longa</th>
                                <th class="header">Valor</th>
                                <th class="header">A????es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../includes/conexao.php");
                            $listar = mysqli_query($conexao, "select prod.id, sub.subcategoria, prod.descricao_curta, prod.descricao_longa, prod.valor from tb_produtos AS prod inner join tb_subcategorias sub on prod.id_subcategoria = sub.id");
                            while ($linha = mysqli_fetch_assoc($listar)) {
                                echo '
                             <tr>
                             <td>' . $linha["id"] . '</td>
                             <td>' . $linha["subcategoria"] . '</td>
                             <td>' . $linha["descricao_curta"] . '</td>
                             <td>' . $linha["descricao_longa"] . '</td>
                             <td>' . $linha["valor"] . '</td>
                             <td>
                             <a href="produtos/excluir.php?id=' . $linha["id"] . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                             <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                             </svg></a>
                             <a href="?pg=AlterarProduto&id=' . $linha["id"] . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                             <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                             <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                             </svg></a>
                             </td>
                             </tr>
                             ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>