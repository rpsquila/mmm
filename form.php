<?
   include "dados_class.php";
   if (isset($_GET['usuario']) <> '')
	{
		$diretorio = "c:/xampp/htdocs/mmm/";
		$usuario = $_GET['usuario'];
		$arquivo = $diretorio.$usuario.'/filter.siv'; 
		$linhas_arquivo = file($arquivo);
		
		$linhas = verificaScript($linhas_arquivo);
		echo $linhas;
		
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
	}
	
	
	
	
	
?>

<html>
<head>
<title>Editando um TXT</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<form action="salva.php" method="post">
<font face="Verdana" size="2">e-mail <br>
<input name="usuario" type="text" readonly="true" value="<? echo $usuario; ?>">@maialogistica.com.br <br><br>

<font face="Verdana" size="2">Conteúdo: <br>
<textarea name="conteudo" cols="60" rows="10">
<?php 
	if (!empty($arquivo))
		echo str_replace('"; }','',$linhas_arquivo[17]);
?>
</textarea>
<br />
<input type="submit" value="Salvar alterações">
</form> 
</body>
</html>