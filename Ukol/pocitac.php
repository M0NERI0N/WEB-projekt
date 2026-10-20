<?php
// Zápis proměných

$nazevPc = "Suprovey PC";
$vyrobcePc = "Acer";
$operacniPamet = 16;
$velikostUloziste = 500;
$maPocitacSSD = true;
$operacniSystem = "Linux Debian 13";
?>
<!--Zápis v Html-->

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>muj počítač</title>
</head>
<body>

<h1>Profil mého počítače</h1>

<p>Název mého PC:
    <strong><?= $nazevPc ?></strong>
</p>

<p>Výrobce mého PC:
    <strong><?= $vyrobcePc ?></strong>
</p>

<p>Operační paměť:
    <strong><?= $operacniPamet ?> GB</strong>
</p>

<p>Velikost úložiště:
    <strong><?= $velikostUloziste ?> GB</strong>
</p>

<p>Mám SSD:
    <strong><?= $maPocitacSSD ? "Ano" : "Ne" ?></strong>
</p>

<p>Operační systém:
    <strong><?= $operacniSystem ?></strong>
</p>

<h2>Datové Typy</h2>

<?
// Vypisovani pomoci var_dump()

echo "<br>";
var_dump($nazevPc);

echo "<br>";
var_dump($vyrobcePc);

echo "<br>";
var_dump($operacniPamet);

echo "<br>";
var_dump($velikostUloziste);

echo "<br>";
var_dump($maPocitacSSD);

echo "<br>";
var_dump($operacniSystem);

?>


</body>
</html>