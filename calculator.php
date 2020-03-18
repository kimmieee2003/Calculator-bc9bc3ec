<?php

echo ("Welke operatie wil je uitvoeren? (+, -)");
$uitvoering = readline();
if($uitvoering == "+") {
echo ("Eerste getal?");
$Eerste = readline();
echo ("Tweede getal?");
$Tweede = readline();
echo (int) ($Eerste + $Tweede);
 }elseif($uitvoering == "-") {
    echo ("Eerste getal?");
    $Derde = readline();
    echo ("Tweede getal?");
    $Vierde = readline();
    echo (int) ($Derde - $Vierde);
}
?>
