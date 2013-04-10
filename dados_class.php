<? 
	function getScript()
	{
		$original[0]  = '#!1 __WebmailJunk__' . PHP_EOL;
		//$original[0] = rtrim($original[0], "\r\n") . PHP_EOL;
		$original[1]  = 'if spamtest {' . PHP_EOL;
		$original[2]  = '  fileinto "Junk E-mail";' . PHP_EOL;
		$original[3]  = '  stop;' . PHP_EOL;
		$original[4]  = '}' . PHP_EOL;
		$original[5]  = '' . PHP_EOL;
		$original[6]  = '#!1 desativar_ausencia' . PHP_EOL;
		$original[7]  = 'if header :contains "Subject" "auto-reply"' . PHP_EOL;
		$original[8]  = '{' . PHP_EOL;
		$original[9]  = '  stop;' . PHP_EOL;
		$original[10] = '}' . PHP_EOL;
		$original[11] = '' . PHP_EOL;
		$original[12] = '#!1 __WebmailAutoreply__' . PHP_EOL;
		$original[13] = 'if true {' . PHP_EOL;
		$original[14] = '   vacation' . PHP_EOL; 
		$original[15] = '     :subject "auto-reply"' . PHP_EOL; 
		$original[16] = '     :days 0 "' . PHP_EOL;
		
		return $original;
	}
	
	function verificaScript($x)
	{
		return count ($x);
	}
	
	function gravaScript()
	{
				
	}
	
?>