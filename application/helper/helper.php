<?php		
	
	function myAutoLoader($classname)
	{
		//
		$filename = "./application/".$classname."/".$classname.".php";
		if(is_file($filename)){
			include_once($filename);
		}	
	}

	function configAutoLoader($classname)
	{
		//
		$filename = "./application/config/".$classname.".php";
		if(is_file($filename)){
			include_once($filename);
		}	
	}
	//acaba necessidade de includes
	spl_autoload_register('myAutoLoader');
	spl_autoload_register('configAutoLoader');
?>	