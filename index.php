<?php
session_start();

$monMot = "Aujourd'hui nous sommes le 15";
$monMot = addcslashes($monMot, '*') . "<br>";
echo filter_var($monMot, FILTER_SANITIZE_ADD_SLASHES);

$mots = explode(" ", $monMot);

foreach ($mots as $mot) {
    echo $mot;
}


$tab = ['hello', 'world'];
$chaine = implode($tab);
echo $chaine;

$chainee = 'hello word, are you ok !';
$chainee = wordwrap($chainee, 10, "<br>");


?>

<form method="post" action="profil.php">
    <label for="username">name :</label>
    <input type="text" name="name">
    <label for="password">password :</label>
    <input type="password" name="password">
    <input type="submit" name="send">
</form>

<?php

$file = 'monFichier.txt';
if (file_exists($file)) {
    echo "mon fichier existe ! houra !!!";
}
else{
    echo "monFichier n'éxiste pas";
}


$result = rename('monFichier.txt', 'monNouveauFichierDeLaMortQuiTue');
if ($result) {
    echo 'renomé';
}
else {
    echo 'Oh mince on ne peut le renommer<br>';
}

if (is_writable($result)) {
    echo "On peut écrire ";
}

$tableau = [1,2,3,4,5,6,7,8,9,10];

for ($i =0; $i < count($tableau); $i++) {
    echo "J'ai trouvé" . $tableau[$i] . '<br>';
}


