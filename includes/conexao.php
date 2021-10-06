<?php
  $conexao = mysqli_connect("localhost","root","","bd_loja");

  //Verifica se já possui usuários
  $qryUsuario = mysqli_query($conexao, "select * from tb_usuarios limit 1");

  if (mysqli_num_rows($qryUsuario) == 0 ){
    $salvar = mysqli_query($conexao, "insert into tb_usuarios VALUES(null, 'Administrador',
     'etec@teste.com', md5('123') )"); 
  }
?>