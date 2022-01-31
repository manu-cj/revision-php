<?php
session_start();
if (isset($_POST['name']) && isset($_POST['password'])) {
    $username =strip_tags(trim($_POST['name']));
    $password = strip_tags($_POST['password']);
}

$username = $_POST['name'];
setcookie('username',$username, time() + 3600 * 24, '/', 'localhost', true, true);
$_SESSION['username'] = $_POST['name'];

foreach ($_COOKIE AS $cookieName => $cookieValue) {
    echo "$cookieName => $cookieValue <br>";
    $utilisateur = $cookieValue;
    echo $utilisateur . '<br>';
}

if (isset($_SESSION['username'])) {
    echo 'Salutation '. $_SESSION['username'] . '<br>';
}

$timeOfSession = 60 * 60 * 24;
session_set_cookie_params($timeOfSession);

?>

    <form method="post" action="profil.php">
        <button name="logout">logout</button>
    </form>

<?php
if (isset($_POST['logout'])) {
    session_destroy();

    header('Location: ?logout=0');
}

if (isset($_GET['logout'])) {
    echo 'Vous avez été deconnecté';
    ?>
<form method="post" action="profil.php">
    <button name="log">Reconnection</button>
</form>
<?php
}

if (isset($_POST['log'])) {

    header('Location: ?relog=0');
}

if (isset($_GET['relog'])) {
    $_SESSION['username'] = $utilisateur;
    echo 'Vous avez été reconnecté ' . $_SESSION['username'];
}