<?php   
include 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql ="INSERT INTO contact (id, nom,prenom,email,modepass,confimodepass) VALUES (?,?,?,?,?);";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="validation.js"></script>
    
    <title>signup</title>
</head>
<body>
<form action="" method="post" class="form">
        <h1>SIGN UP</h1>
        <p> Nom:</p>
        <input type="text" name="" placeholder="Entrer nom">
        <p>Prenom :</p>
        <input type="text" name="" placeholder="Entrer prenom" id="prenom">
        <p>Email :</p>
        <input type="email" name="" placeholder="Entrer email" id="email">
        <p>mode pass :</p>
        <input type="password" name="" placeholder="Entrer Password" id="pass">
        <p>Confirmer mode pass:</p>
        <input type="password" name="" placeholder="Confirmer Password " id="confipass">
        
        
        <input  class="chekbox" type="checkbox" name="" onclick = "myfunction()">
       
        <input type="submit" value="SIGN UP">

   </form>
</body>
</html>