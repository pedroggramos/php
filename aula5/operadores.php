<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Aula 5 - Operações aritiméticas - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

</head>
<body>
    <div>
        <?php

        /*$n1 = 1;
        $n2 = 2;
        echo "A soma entre $n1 e $n2 vale ". ($n1+$n2);
        echo "<br/>A subtração entre $n1 e $n2 vale ". ($n1-$n2);
        echo "<br/>A multiplicação entre  $n1 e $n2 vale ". ($n1*$n2);
        echo "<br/>A divisão entre $n1 e $n2 vale ". ($n1 / $n2);
        echo "<br/>O módulo(resto) entre $n1 e $n2 vale ". ($n1%$n2);
        echo "<br/>";*/

        /*$n1 = 2;
        $n2 = 3;

        $media = ($n1+$n2)/2;
        echo "Média entre $n1 e $n2 vale $media";
        echo "<br/>";*/

        /* http://localhost/projects/studies/aula5/operadores.php?a=5&b=2 */

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Os valores inseridos em A e B são respectivamente $n1 e $n2</h2>";
        echo "<br/>";
        echo "A soma entre $n1 e $n2 vale ". ($n1+$n2);
        echo "<br/>A subtração entre $n1 e $n2 vale ". ($n1-$n2);
        echo "<br/>A multiplicação entre  $n1 e $n2 vale ". ($n1*$n2);
        echo "<br/>A divisão entre $n1 e $n2 vale ". ($n1 / $n2);
        echo "<br/>O módulo(resto) entre $n1 e $n2 vale ". ($n1%$n2);
        echo "<br/>";






        ?>
    </div>
</body>
</html>