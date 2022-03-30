<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 66;

//var_dump($nome);
//var_dump($idade);

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