<? 
	function getScript()
	{
		$original[0]  = '#!1 __WebmailJunk__';
		$original[1]  = 'if spamtest {';
		$original[2]  = '  fileinto "Junk E-mail";';
		$original[3]  = '  stop;';
		$original[4]  = '}';
		$original[5]  = '';
		$original[6]  = '#!1 desativar_ausencia';
		$original[7]  = 'if header :contains "Subject" "auto-reply"';
		$original[8]  = '{';
		$original[9]  = '  stop;';
		$original[10] = '}';
		$original[11] = '';
		$original[12] = '#!1 __WebmailAutoreply__';
		$original[13] = 'if true {';
		$original[14] = '   vacation'; 
		$original[15] = '     :subject "auto-reply"'; 
		$original[16] = '     :days 0 "';
		
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