<?php

require('smarty-2.6.30/libs/Smarty.class.php');

class Smarty_Prueba extends Smarty
{
	function Smarty_Prueba()
	{

		$this->Smarty();
		$this->template_dir='templates/';
		$this->config_dir='configs/';
		$this->cache_dir='cache/';
		$this->compile_dir='templates_c/';

		$this->caching = true;
		$this->assign('app_name','Prueba');
	}
}


?>