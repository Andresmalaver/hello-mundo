130
a:4:{s:8:"template";a:1:{s:9:"index.tpl";b:1;}s:9:"timestamp";i:1478730248;s:7:"expires";i:1478733848;s:13:"cache_serials";a:0:{}}<html>
<head>

<title></title>
<style type="text/css">

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
Nombre al revez ----> <input type="text" name="resultado" readonly="false" value="">	
Numero de letras----> <input type="text" name="resultado" readonly="false" value="0">


<p><input type="submit" name="Comparar" value="Transformar"></p>

</fieldset>


</form>
</center>
</body>
</html>
