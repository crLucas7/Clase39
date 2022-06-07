<!DOCTYPE html>
<html lang="es">
    <head>
    <link rel="stylesheet" href="views/estilos.css">
        <meta charset="UTF-8" />
        <title>Encomienda</title>
    </head>
    <body>
		<h1>Listado de encomienda</h1>


<table>

<tr>

<th>Numero</th>
<th>Fecha</th>
<th>Tipo</th>
<th>Despachante</th>
<th>Destinatario</th>
<th>Precio</th>

</tr>

        <?php


      



			//Recorremos el array para ir mostrando fila a fila los registros
            foreach ($datos as $dato) {

                if($dato["tipo"]=="sobre"){
                    $precio=100;
                }
                if($dato["tipo"]=="paquete"){
                    $precio=200;
                }
                if($dato["tipo"]=="caja"){
                    $precio=300;
                }

                echo "<tr>". "<td>" . $dato["numero"]." </td>" ."<td>".$dato["fecha"]." </td>" ."<td>".$dato["tipo"]." </td> " ."<td>".$dato["despachante"]." </td> " ."<td>".$dato["destinatario"]." </td>" ." <td>$".$precio." </td>" ."</tr>";

               
        
            }
        ?>
   </table>     
    </body>
</html>