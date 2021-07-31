
<?php
	
	/*if(isset($_GET['idcliente']))
	{
		$idcliente = $_GET['idcliente'];
		$ligax = mysqli_connect('localhost', 'root', '12345678');
		mysqli_select_db($ligax, 'exemplo');

		$atualiza = "UPDATE cliente SET nome='$nome', idade = '$idade', marca = '$marca'";	
		$result = mysqli_query($ligax, $atualiza);

		if($result) echo '<h3>Cliente atualizado com sucesso!</h3>';

		$ligax->close();
	}else{*/

		$nome = $_GET['nome'];
		$idade = $_GET['idade'];
		$marca = $_GET['marca'];

		echo "Eu me chamo <b>".$nome. "</b> ,tenho <b>" .$idade.
		     "</b> anos e gosto de carros da marca <b>".$marca."</b>";
		echo '</br>';
		
		include_once('ligacao.php');
	    /*$ligax = mysqli_connect('localhost', 'root', '12345678');
		mysqli_select_db($ligax, 'exemplo');*/

		// $insere = "INSERT INTO cliente ( nome, idade, marca ) VALUES ('$nome', '$idade','$marca')";
		$insere = "CALL sp_insert_cliente('$nome', '$idade', '$marca')";
		$result = mysqli_query($ligax, $insere);

		if($result) echo '<h3>Cliente cadastrado com sucesso!</h3>';

		$ligax->close();
	
		
?>

<p> <a href="adicionar.php">Voltar para Adicionar um Cliente</a>
<p> <a href="principal.html">Pagina Principal</a>


