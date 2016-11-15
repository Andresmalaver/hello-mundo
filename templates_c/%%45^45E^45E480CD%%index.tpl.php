<?php /* Smarty version 2.6.30, created on 2016-11-09 16:17:53
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count_characters', 'index.tpl', 48, false),)), $this); ?>
<html>
<head>

<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<style type="text/css">
<?php echo '
fieldset {
    font-family: sans-serif;
    border: 5px solid #1F497D;
    background: #ddd;
    border-radius: 5px;
    padding: 15px;
}

fieldset legend {
    background: #1F497D;
    color: #fff;
    padding: 5px 10px ;
    font-size: 32px;
    border-radius: 5px;
    box-shadow: 0 0 0 5px #ddd;
    margin-left: 20px;
}




'; ?>


</style>
</head>
<body>
<center>
<form action="index.php" method="post">

<fieldset>
<legend><b>Digita tu nombre *-* </b></legend>
	
<h3>Nombre al revez</h3>
<p>Escribe tu nombre <input type="text" name="num1"></p>

<!--<p>Digite otro numero <input type="text" name="num2"></p>-->

</fieldset>

<fieldset>
Nombre al revez ----> <input type="text" name="resultado" readonly="false" value="<?php echo $this->_tpl_vars['invert']; ?>
">	
Numero de letras----> <input type="text" name="resultado" readonly="false" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['mayor'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
">


<p><input type="submit" name="Comparar" value="Transformar"></p>

</fieldset>


</form>
</center>
</body>
</html>
