<?php
session_start();
setcookie('username',$_POST['name'], time() + 3600 * 24, '/', 'localhost', true, true);
$_SESSION['username'] = $_POST['name'];

foreach ($_COOKIE AS $cookieName => $cookieValue) {
    echo "$cookieName => $cookieValue <br>";
}

if (isset($_SESSION['username'])) {
    echo 'Salutation '. $_SESSION['username'];
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
}