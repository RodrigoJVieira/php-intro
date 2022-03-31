<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<title> Formulário de inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<p>FORMULÁRIO PAA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
	<?php
		$successMessage = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
		if(!empty($successMessage))
		{
			echo $successMessage;
		}

		$errorMessage = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
		if(!empty($errorMessage))
		{
			echo $errorMessage;
		}
	?>
	<p>Seu nome: <input type="text" name="nome" /></p>
	<p>Sua idade: <input type="text" name="idade" /></p>
	<p>Seu nome: <input type="submit" value="Enviar dados do competidor"/></p>
</form>

</body>

</html>