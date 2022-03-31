<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor, preencha-o novamente.';
    header( string: 'location: index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 letras.';
    header( string: 'location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ter mais de 40 caracteres.';
    header( string: 'location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem de erro'] = 'Informe um número para a idade.';
    header( string: 'location: index.php');
    return;
}

if($idade >= 6 && $idade  <= 12)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria" .$categoria[$i];
			header(string: "location: index.php");
			return;
    }
}
elseif($idade >= 13 && $idade  <= 18)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'juvenil')
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria" .$categoria[$i];
			header(string: "location: index.php");
			return;
	}
}
else
{
	for($i = 0; $i <= count($categorias); $i++)
	{
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria" .$categoria[$i];
			header(string: "location: index.php");
			return;
	}
}

?>