<html>
<head>

<title>{$title}</title>
<style type="text/css">
{literal}
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




{/literal}

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
Nombre al revez ----> <input type="text" name="resultado" readonly="false" value="{$invert}">	
Numero de letras----> <input type="text" name="resultado" readonly="false" value="{$mayor|count_characters}">


<p><input type="submit" name="Comparar" value="Transformar"></p>

</fieldset>


</form>
</center>
</body>
</html>

