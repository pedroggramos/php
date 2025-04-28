<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Aula 5 - Funções aritiméticas - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h2{
            font:12pt Arial;
            color:purple;
        }
    </style>

</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $v3 = $_GET["z"];

        $soma =  $v1 + $v2;

        echo "<h2>Os valores recebidos foram $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ".abs($v2);
        /*echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, abs($v2)); teste*/
        echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        echo "<br/>A raiz quadrada de $soma é: ".sqrt($soma);
        echo "<br/> O valor de $v3 arredondado é:  ".round($v3);
        echo "<br/> O valor arredondado pra cima é: ".ceil($v3);
        echo "<br/>O valor arredondado pra baixo é: ".floor($v3);
        echo "<br/>A parte inteira de $v3 é: ".intval($v3);
        echo "<br/> O valor de $v3 em moeda é: R$".number_format($v3, 2, ",",".");
        echo "<br/> "



    ?>
</div>
</body>
</html>