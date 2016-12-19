<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // insere dados no banco
       include_once 'conectar.php';
        
        $vcod_mercadoria = $_POST['cod_mercadoria'];
        $vtipo_mercadoria = $_POST['tipo_mercadoria'];
        $vnome_mercadoria = $_POST['nome_mercadoria'];
        $vquantidade = $_POST['quantidade'];
        $vpreco = $_POST['preco'];
        $vtipo_do_negocio = $_POST['tipo_do_negocio'];
        
        $sql = "insert into mercadoria values('$vcod_mercadoria','$vtipo_mercadoria','$vtipo_mercadoria','$vnome_mercadoria','$vquantidade','$vpreco','$vtipo_do_negocio')";
        $res = mysql_query($conecta,$sql);
        mysql_close($conecta);
        ?>
        
        <div class="conteudo_dados">
	  	<div class="cabecalho">
	    	<h1>Operação registrada com sucesso!</h1>      
	  	</div>
	 	<ul class="pag">
                    <li><a href="cadastrar.php">Realizar outra operação</a></li>
                    <li><a href="index.php">Visualizar operações realizadas</a></li>
		</ul>    
	</div>
        
    </body>
</html>
