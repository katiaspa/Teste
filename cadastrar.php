<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Cadastro de mercadorias-->
        <form  method="post" action="enviaDados.php">
            <fieldset id="cadastro_mercadoria"><legend>Cadastrar Mercadoria</legend>
                <p><label>Tipo da Mercadoria:  <input type="text" name="mec" id="mec" size="20" maxlength="20"/></label></p>
                <p><label>Nome da Mercadoria:  <input type="text" name="name" id="nome" size="20" maxlength="20"/></label></p>
                <p><label>Quantidade:          <input type="text" name="qtde" id="qtde" size="10" maxlength="5"/></label></p>
                <p><label>Preço:               <input type="text" name="preco" id="preco" size="10" maxlength="5"/></label></p>
                <p><label>Tipo do Negócio:</label>
                    <select name="tipoDonegocio">
                         <option value="vz"></option>
                         <option value="compra">compra</option>
                         <option value="venda">venda</option>
                     </select>
                </p>
                
            </fieldset>
            <p>
               <center> 
		   <button type="submit" class="btn btn-success" id="enviar" value="Enviar">Enviar</button>
		</center>                   
            </p>
        </form>
       
    </body>
</html>
