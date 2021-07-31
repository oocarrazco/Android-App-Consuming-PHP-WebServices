<div align="center">
	<table border="1" style="margin:2% 2%;">
		<tr> 
			<th>Nomes dos Autores</th>
			<th>Idade</th>
			<th>Marca</th>
		</tr>
		<?php
			
			echo "<h3>A seguir se exibem os nomes dos clientes que estao na tabela cliente</h3>";

		    $ligax = mysqli_connect('localhost', 'root', '12345678');
			mysqli_select_db($ligax, 'exemplo');

			$insere = 'select * from cliente';
			$result = mysqli_query($ligax, $insere);

			$nregistos = mysqli_num_rows($result);

			for ($i=0; $i <$nregistos; $i++)  
			{
		    	$registo = mysqli_fetch_assoc($result);
		    	echo '<tr>'; 
		    	echo '<td>' .$registo['nome']. '</td>';
		    	echo '<td>' .$registo['idade']. '</td>';
		    	echo '<td>' .$registo['marca']. '</td>';
		    	echo '</tr>';     
		 	}
		 	mysqli_close($ligax);
		?>
	</table>

	<p > <a href="principal.html">Voltar para a Pagina Principal</a></p>
</div>