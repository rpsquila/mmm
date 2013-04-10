<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">
	<?php
	$user = 0;
// pega o endereço do diretório
$diretorio = getcwd(); 
// abre o diretório
$ponteiro  = opendir($diretorio);
// monta os vetores com os itens encontrados na pasta
while ($nome_itens = readdir($ponteiro)) {
    $itens[] = $nome_itens;
}

//O que fizemos aqui, foi justamente, pegar o diretório, abri-lo e lê-lo.

//Continuando, vamos usar:
//sort: ordena os vetores (arrays), de acordo com os parâmetros informados. Aqui estou ordenando por pastas e depois arquivos

// ordena o vetor de itens
sort($itens);
// percorre o vetor para fazer a separacao entre arquivos e pastas 
foreach ($itens as $listar) {
// retira "./" e "../" para que retorne apenas pastas e arquivos
   if ($listar!="." && $listar!=".."){ 

// checa se o tipo de arquivo encontrado é uma pasta
   		if (is_dir($listar)) { 
// caso VERDADEIRO adiciona o item à variável de pastas
			$pastas[]=$listar; 
		} else{ 
// caso FALSO adiciona o item à variável de arquivos
			$arquivos[]=$listar;
		}
   }
}

//Vimos acima, a expressão is_dir, indicando que as ações devem esntão ser executadas, ali mesmo, no diretório que já foi aberto e lido. As ações que executamos ali, foram: ver se tem pastas, listar. Ver se tem arquivos, listar.

//Agora, se houverem pastas, serão apresentadas antes dos arquivos, em odem alfabética.
//Se não houverem, serão apresentados apenas os arquivos, na mesma ordem.
//E se houverem os dois, serão mostrados igualmente.

// lista as pastas se houverem
if ($pastas != "" ) { 
foreach($pastas as $listar){
   print "Pasta: <a href='form.php?usuario=$listar' target='formulario'>$listar</a><br>";}
   }
// lista os arquivos se houverem
//if ($arquivos != "") {
//foreach($arquivos as $listar){
//   print " Arquivo: <a href='$listar'>$listar</a><br>";}
//   }
?></td>
    <td width="80%"><Iframe name="formulario" src="form.php" width="100%" height="400" scrolling="auto" frameborder="0"></Iframe></td>
  </tr>
</table>
</body>
</html>