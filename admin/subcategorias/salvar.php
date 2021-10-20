<?php
    $categoria = $_POST["categoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao, "insert into tb_categorias VALUES(0, '$categoria')");
    if ($gravar){
        echo "<script>alert('Categoria gravada com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Categorias">';
    }else{
        echo "ERRO!!"; 
    }
?>