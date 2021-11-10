<?php
    $id = $_POST["id"];
    $descri_curta = $_POST["descri_curta"];
    $descri_longa = $_POST["descri_longa"];
    $valor = $_POST["valor"];
    $subcategoria = $_POST["subcategoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao,"update tb_produtos set id_subcategoria='$subcategoria',descricao_curta='$descri_curta',descricao_longa='$descri_longa',valor='$valor' where id='$id'");
    if ($gravar){
        echo "<script>alert('Produto Alterado com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Produtos">';
    }else{
        echo "ERRO!!"; 
    }

?>