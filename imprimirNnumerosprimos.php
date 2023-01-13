<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir N Numeros primos</title>
</head>
<body>
    <h1>Numeros Primos</h1>
    <form action="" method="post">
        <label for="">Ingresa el numero:</label>
        <input name="c_numero" type="text">
        <input type="submit" name="b_calcular" value="calcular">
    </form>
    <?php
        
        for($i = 1, $ban = $k = 0; $k <= $_POST["c_numero"]; $i++)
        {
           for($j = $i; $j > 0; $j--)
           {
              if($i % $j == 0)
              {
                $ban++;
              }
           }
           if($ban <= 2)
           {
              $k++;
              echo $i." ";
           }
           $ban = 0;
        }
    ?>
</body>
</html>
