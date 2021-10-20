<?php
    $id = $_POST["id_categoria"];
    $categoria = $_POST["categoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao, "update tb_categorias set categoria='$categoria' where id='$id'");
    if ($gravar){
        echo "<script>alert('Categoria Atualizada com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Categorias">';
    }else{
        echo "ERRO!!"; 
    }
?>