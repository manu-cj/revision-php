<?php
$monMot = "Aujourd'hui nous sommes le 15";
$monMot = addcslashes($monMot) . "<br>";
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

<form method="post" action="index.php">
    <label for="username">name :</label>
    <input type="text" name="name">
    <label for="password">password :</label>
    <input type="password" name="password">
    <input type="submit" name="send">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['password'])) {
    $username =strip_tags(trim($_POST['name']));
    $password = strip_tags($_POST['password']);
}

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
    'Oh mince on ne peut le renommer';
}

