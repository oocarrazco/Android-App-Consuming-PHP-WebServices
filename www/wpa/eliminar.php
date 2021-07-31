<div align="center">
	<table border="1" style="margin:2% 2%;">
		<tr> 
			<th >Nomes dos Autores</th>
		</tr>
		<?php
			
			echo "<h3>A seguir se exibem os nomes dos clientes que estao na tabela cliente</h3>";
			//include_once('ligacao.php');
		    $ligax = mysqli_connect('localhost', 'root', '12345678');
			mysqli_select_db($ligax, 'exemplo');

			$selecciona = 'select * from cliente';
			$result = mysqli_query($ligax, $selecciona);
			$nregistos = mysqli_num_rows($result);

			for ($i=0; $i <$nregistos; $i++)  
			{
		    	$registo = mysqli_fetch_assoc($result);
		    	echo '<tr> <td>' .$registo['nome']. '</td></tr>';     
		 	}
	

		 	if(isset($_GET['nome'])){
		 	
		 		$nome = $_GET['nome'];
		 					
			 	$id = "SELECT * FROM cliente WHERE nome = '$nome'";
			 	
			 	$result1 = mysqli_query($ligax, $id);
			 	$registo11 = mysqli_fetch_assoc($result1);

			 	$idcliente = $registo11["idcliente"];
			 	//echo "<br/>ddddd".$idcliente."ggg";
			 	// $elimina = "DELETE FROM cliente WHERE (idcliente = $idcliente)"; 
			 	$elimina = "CALL sp_eliminar_cliente($idcliente)"; 
				$result2 = mysqli_query($ligax, $elimina);
				
				header("Location: http://localhost/wpa/eliminar.php?");				
		 	}
		 	$ligax->close();
		?>
	</table>

	<form method="GET" action="eliminar.php">
			
				<p> Nome <input type="text" name="nome" size=30> </p>
				<input type="submit" value="Eliminar cliente">
					
			</form>

	<p > <a href="principal.html">Voltar para a Pagina Principal</a></p>
</div>