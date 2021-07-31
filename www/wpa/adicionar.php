<html>
	<head>
		<title> formulário PHP </title>
	</head>
	<body>		
		<div style="margin: 5% 30%; padding: 1% 1%; border: 3px solid #73AD21; width:25%;">

			<form method="GET" action="cadastrar.php">
			
				<p>Nome <br> <input type="text" name="nome" size=30> </p>
				<p>Idade <br> <input type="text" name="idade" size=2> </p>
				<p>Qual o carro que mais gostas? </p>
				<select name="marca">
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
