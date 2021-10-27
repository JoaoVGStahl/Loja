<?php
    $id = $_POST["id_subcategoria"];
    $categoria = $_POST["categoria"];
    $subcategoria = $_POST["subcategoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao, "update tb_subcategorias set id_categoria='$categoria', subcategoria='$subcategoria' where id='$id'");
    if ($gravar){
        echo "<script>alert('Subcategoria Atualizada com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=SubCategorias">';
    }else{
        echo "ERRO!!"; 
    }
?>