<?php
include "dados_class.php";
$conteudo = $_POST["conteudo"];
$usuario = $_POST['usuario'];

$diretorio = "c:/xampp/htdocs/mmm/";
$arquivo = $diretorio.$usuario.'/filter.siv';
$linhas_arquivo = file($arquivo);
$linhas = verificaScript($linhas_arquivo);
		
		if ($linhas < 16)
		{
			$linhas_arquivo = getScript();
			$linhas_arquivo[17] = '';
		}
		elseif ($linhas == 16)
		{
			$linhas_arquivo = getScript();
			$linhas_arquivo[17] = '';
		}
		else
		{
			
		}


$linhas_arquivo[17] = $conteudo.'"; }';


$autoresposta = fopen($arquivo, 'w');
//$novo_conteudo = '';
//foreach($linhas_arquivo as $value)
for ($i = 0; $i == count($linhas_arquivo); $i++)
{
	//$novo_conteudo = $novo_conteudo.$value;
	fwrite($autoresposta, $i);
}
//echo $novo_conteudo;

//$texto = "texto.txt";
;
//fwrite($autoresposta, $novo_conteudo);
fclose($autoresposta);


?> 