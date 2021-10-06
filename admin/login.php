<?php
  session_start();
  include("../includes/conexao.php");
  
$email = $_POST["email"];
$senha = $_POST["senha"];

//Estrutura condicional usando operador ternário
isset($_POST["lembrar"]) ? $mantenha = true : $mantenha = false;

/*Estrutura Condicional Composta
if (isset($_POST["lembrar"])){
	$mantenha = true;
}else{
	$mantenha = false;
}
*/
 $existeNoBD = mysqli_query($conexao,"select * from tb_usuarios where email = '$email' and senha = md5('$senha')"); 
 
	 if (mysqli_num_rows($existeNoBD)>0){
		$_SESSION["usuarioLogado"] = mysqli_fetch_assoc($existeNoBD);
		header("Location: admin.php");
	 }else{
		 echo '<div class="alert alert-danger" style="position:absolute; margin-top:100px;margin-left:40%;" role="alert">Usuário ou senha inválidos!</div>';
		 include("index.php");
	 }
	 
?>