<?php
    $categoria = $_POST["categoria"];
    $subcategoria = $_POST["subcategoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao, "insert into tb_subcategorias VALUES(0, '$categoria','$subcategoria')");
    if ($gravar){
        echo "<script>alert('Subcategoria gravada com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Subcategorias">';
    }else{
        echo "ERRO!!"; 
    }
?>