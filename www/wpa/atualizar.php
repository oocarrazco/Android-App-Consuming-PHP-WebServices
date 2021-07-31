
<?php
	
    $idcliente = (int)$_GET["idcliente"];
    $nome = $_GET['nome'];
	$idade = $_GET['idade'];
	$marca = $_GET['marca'];	

    $ligax = mysqli_connect('localhost', 'root', '12345678');
	mysqli_select_db($ligax, 'exemplo');

	//$atualiza = "UPDATE cliente SET nome='$nome', idade = '$idade', marca = '$marca' WHERE idcliente = '$idcliente'";	
	$atualiza = "CALL sp_update_cliente('$idcliente', '$nome', '$idade', '$marca')";	
	$result = mysqli_query($ligax, $atualiza);
	
	$ligax->close();

	if($result) echo '<h3>Cliente atualizado com sucesso!</h3>';
?>

<p> <a href="atualizar_formulario.php">Voltar para Atualizar um Cliente</a>
<p> <a href="principal.html">Pagina Principal</a>

