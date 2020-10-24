

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


include('./clases.php');

$coche1 = new Coche('Green','Ford',100,64);
// for ($i=0; $i < 15 ; $i++)     $coche1->acelerar();

$coche2 = new Coche();
$coche2 -> setColor("Yellow");
// for ($i=0; $i < 15 ; $i++)     $coche2->frenar();

echo var_dump($coche1);
echo var_dump($coche2);

echo $coche2->mostrar($coche1);


$coche_antiguo = new Antiguo('Orange','Ford',43,789,false);
var_dump($coche_antiguo);
echo $coche_antiguo->getColor2();

?>


</body>
</html>








