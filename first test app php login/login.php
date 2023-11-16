<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger 
// votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = "moi";
$pwd_valide = " 1234";
if (isset($_POST['login']) && isset($_POST['pwd'])) {
if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
// dans ce cas, tout est ok, on peut démarrer notre session
session_start ();
// on enregistre les paramètres de notre visiteur comme variables de session 
$_SESSION['login'] = $_POST['login'];
$_SESSION['pwd'] = $_POST['pwd'];
// on redirige notre visiteur vers une page de notre section membre
header ('location: page_membre.php');
}
else {
// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
 echo '<body onLoad="alert(\'Membre non reconnu...\')">';
// puis on le redirige vers la page d'accueil
header ('location: index.html');

} }
else {
echo "Les variables du formulaire ne sont pas déclarées.";
}

?>