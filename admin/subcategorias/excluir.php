<?php
    $id = $_GET["id"];
    include("../../includes/conexao.php");

    $excluir = mysqli_query($conexao, "delete from tb_subcategorias where id='$id'");
    if ($excluir){
        echo "<script>alert('Categoria removida com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=SubCategorias">';
    }else{
        echo "ERRO!!"; 
    }
?>