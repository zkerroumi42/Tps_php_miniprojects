<?php
session_start();
$cin= $_SESSION["CIN"];
$nom=$_SESSION["nom"];
$note=$_SESSION["note"];
if(!empty($_POST["submit"])){
    session_destroy();
    header("location:authentification.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>consultation</title>
</head>
<body>
    <form action="consultation.php" method="post">
        <h1>bonjour M.<?php echo $nom ?></h1>
    <table>
        <tr><th>nom</th><th>cin</th><th>note</th></tr>
        <tr><td> <?php echo $nom ?> </td><td> <?php echo $cin ?> </td><td> <?php echo $note ?> </td></tr>
    </table>
    <input type="submit" name="submit" value="back"></form>
</body>
</html>