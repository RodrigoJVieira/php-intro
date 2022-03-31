<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve ter mais de 3 letras';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome está muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um número para idade';
    return;
}

if($idade >= 6 && $idade  <= 12)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'infantil')
			echo "O nadador ".$nome." compete na categoria infantil.";
	}
}
elseif($idade >= 13 && $idade  <= 18)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'juvenil')
			echo "O nadador ".$nome." compete na categoria juvenil.";
	}
}
else
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'adulto')
			echo "O nadador ".$nome." compete na categoria adulto.";
	}
}

?>