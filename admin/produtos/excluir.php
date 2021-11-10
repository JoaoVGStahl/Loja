<?php 
    $id = $_GET["id"];
    include("../../includes/conexao.php");

    $excluir = mysqli_query($conexao, "delete from tb_produtos where id='$id'");
    if ($excluir){
        echo "<script>alert('Produto removido com sucesso!!')</script>" ;
        echo '<meta http-equiv="refresh" content="0;url=../admin.php?pg=Produtos">';
    }else{
        echo "ERRO!!"; 
    }
?>
