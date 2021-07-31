<html> 
	<head> 
		<title>Mostrar</title>
		</head>
<body align="center"> 
	<h3>Mostrar cliente procurado</h3>
	<?php

		 $nomeproc = $_GET['nome'];

		 if (!$nomeproc) 
		   {echo "Volte atrás e escreva o nome.";}

		 echo "<b>Nome procurado:</b> $nomeproc. </br>";

		 $ligax = mysqli_connect('localhost', 'root','12345678');
		if (!$ligax)
	 	{
	 		echo "<b> Falha na ligação.</b></br>"; 
	 		exit; 
	 	}

		 mysqli_select_db($ligax, 'exemplo');
		 $procura = "Select * from cliente where nome like '%".$nomeproc."%'";
		 
		 $result = mysqli_query($ligax, $procura);
		 $nregistos = mysqli_num_rows($result);

		 echo "<b>Nº de registos encontrados:</b> $nregistos </br>";

	?>
	</br>
	<table align="center" border="1"> 
	<tr>
		<th> Nome:</th> 
		<th> Idade:</th> 
		<th> Marca:</th> 
	</tr> 

	<?php
		for ($i=0; $i <$nregistos; $i++)  
		{
		   $registo = mysqli_fetch_assoc($result);
		   echo '<tr> <td>'.$registo['nome'].'</td>';
		   echo '<td>'.$registo['idade'].'</td>';
		   echo '<td>'.$registo['marca'].'</td> </tr>'; 
		}
		mysqli_close($ligax);
	?> 

	</table>
	<p > <a href="pesquisar.html">Voltar para o formulario de pesquisa</a></p>
	<p > <a href="principal.html">Voltar para a Pagina Principal</a></p>
	</body>
</html> 


