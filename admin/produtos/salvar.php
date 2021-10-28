<?php
    $descri_curta = $_POST["descri_curta"];
    $descri_longa = $_POST["descri_longa"];
    $valor = $_POST["valor"];
    $subcategoria = $_POST["subcategoria"];
    include("../../includes/conexao.php");

    $gravar = mysqli_query($conexao,"insert into tb_produtos VALUES(0,'$subcategoria','$descri_curta','$descri_longa',$valor)");
    if ($gravar){
        echo "<script>alert('Produto gravado com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Produtos">';
    }else{
        echo "ERRO!!"; 
    }

?>