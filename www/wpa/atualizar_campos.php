<html>
	<head>
		<title> formulário PHP </title>
	</head>
	<body>		
		<div style="margin: 5% 30%; padding: 1% 1%; border: 3px solid #73AD21; width:25%;">
<?php
	/*if(isset($_GET["idcliente"]) && is_numeric($_GET["idcliente"]))
	{*/
	    $idcliente = (int)$_GET["idcliente"];
	    
	    $ligax = mysqli_connect('localhost', 'root', '12345678');
		mysqli_select_db($ligax, 'exemplo');

		$procura = "SELECT * from cliente WHERE idcliente = '$idcliente'";
		$result = mysqli_query($ligax, $procura);
		//$nregistos = mysqli_num_rows($result);

		$registo = mysqli_fetch_assoc($result);
		
		//...onde aqui, nós atribuímos às variáveis.
		$nome = $registo['nome'];
		$idade = $registo['idade'];
		$marca = $registo['marca'];	

		$ligax->close();      
	
		//ini_set('display_errors', 0);
		//ini_set('display_startup_erros', 0);
	//}
?>
	<form method="GET" action="atualizar.php">
	
		<p>Nome <br> 
		<input type="text" name="nome" size=30  value="<?php echo $nome;?>"> </p> 
		
		<p>Idade <br> 
		<input type="text" name="idade" size=2 value="<?php echo $idade;?>"> </p>
		<input type="hidden" name="idcliente" value="<?php echo $idcliente;?>">
		<p>Qual o carro que mais gostas? </p>
		<select name="marca" value="<?php echo $marca;?>">
			<option>Ferrari </option>
			<option>Mercedes </option>
			<option>BMW </option>
		</select>
		<p id="teste"> <input type="submit" value="OK" > </p>			
	</form>
	
</div>		
<p style="margin: 5% 30%;"> <a href="principal.html">Voltar para a Pagina Principal</a></p>

	</body>
</html>