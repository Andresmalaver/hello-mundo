<?php

error_reporting('0');

require('smarty-2.6.30/libs/Smarty.class.php');

$smarty = new Smarty;


////////----------

$numero1=$_POST['num1'];

//$numero2=$_POST['num2'];




	$smarty->assign('mayor',$numero1);


	$invertida=strrev($numero1);

	$smarty->assign('invert',$invertida);


	

//////-------
$smarty->display('index.tpl');




?>









