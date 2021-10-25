<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$usuario = isset($_POST['ppt']) ? $_POST ['ppt'] : 0;
$computador = rand(1,3);

?>

<form action = "" method = "POST";>
<input type = "radio" value = "1" name = "ppt">PEDRA<br>
<input type = "radio" value = "2" name = "ppt">PAPEL<br>
<input type = "radio" value = "3" name = "ppt">TESOURA<br>
<br>
<input type = "submit" value = "jogar">
</form>

<?php

echo "<img src='img/$usuario.PNG'>";
echo "<img src='img/$computador.PNG'>";

if ($usuario == 1 && $computador == 3)
echo "<br>Você venceu, usuário!";

elseif ($usuario == 2 && $computador == 1)
echo "<br>Você venceu, usuário!";

elseif ($usuario == 3 && $computador == 2)
echo "<br>Você venceu, usuário!";

elseif ($usuario == $computador)
echo "<br>Deu empate!";

else
echo "<br>O computador venceu!";

?>

</body>
</html>