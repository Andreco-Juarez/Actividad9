<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1>
        <tbody>
            <?php
                $tamaño=8; //variable que dicta el tamaño del tablero
                //Ciclo que lleva el control de las columnas
                for($i=0; $i<$tamaño; $i++)
                {
                    //condicion que me permite saber en que numero de columna ir para saber con que color iniciar
                    if($i%2==0)
                    {
                        $incremento = 1;

                    }
                    else
                    {
                        $incremento = 0;
                    }
                    echo "<tr>";
                    //Ciclo que me lleva el control de las filas
                    for($k=0; $k<$tamaño; $k++)
                    {
                        echo "<td>";
                        //Condicion que permite saber que color de casilla iría
                        if($k%2==0+$incremento)
                        {
                            print("<img src='./imagenes/blanco.png' width='50' height='50'");
                        }
                        else
                        {
                            print("<img src='./imagenes/cuadroNegro.jpg' width='50' height='50'");
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>