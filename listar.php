<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="conteudo">
            <table border = 1 >
                <caption>Lista de Mercadoria</caption>
                <tr bgcolor =lightblue>
                    <td>Código da Mercadoria</td>
                    <td>Tipo da Mercadoria</td>
                    <td>Nome da Mercadoria</td>
                    <td>Quantidade</td>
                    <td>Preço</td>
                    <td>Tipo do Negócio</td>
                </tr>
                
            </table>
        </div>
        <?php
        // Lista as mercadorias cadastradas
        include_once 'conectar.php';
        
        $query = "select * from mercadoria";
        $res = mysql_query($conecta,$query);
        while ($linha = mysql_fetch_row($res)){
            $vcod_mercadoria = $linha[0];
            $vtipo_mercadoria = $linha[1];
            $vnome_mercadoria = $linha[2];
            $vquantidade = $linha[3];
            $vpreco = $linha[4];
            $vtipo_do_negocio = $linha[5];
            
            echo "<tr>";
                echo "<td>$vcod_mercadoria</td>
                    <td>$vtipo_mercadoria</td>
                    <td>$vnome_mercadoria</td>
                    <td>$vquantidade</td>
                    <td>$vpreco</td>
                    <td>$vtipo_do_negocio</td>";
                echo "</tr>";        
        }
        mysql_close($conecta);
        ?>
    </body>
</html>
