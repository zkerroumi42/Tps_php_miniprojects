<?php 
session_start();
include "database.php";

   if(!empty($_POST)){
    $erreurcin=null;
    $erreurpwd=null;
    
    $cin=$_POST["cin"];
    $pwd=$_POST["pwd"];
    $type=$_POST["mylist"];
    $valid=true;
   if(empty($cin)){
     $erreurcin="entrer votre cin ";
     $valid=false;
   }
   if(empty($pwd)){
    $erreurpwd="entrer votre password ";
    $valid=false;
   }

   $_SESSION["type"]=$type;

    if($valid){
        if($_SESSION["type"]=="etudiant"){
            $_SESSION["etudiant"]=$cin;
          $pdo=Database::connect();
          $sql="SELECT * from  notes WHERE CIN=?";
           $q=$pdo->prepare($sql);
           $q->execute(array($cin));
    
          $data=$q->fetch(PDO::FETCH_ASSOC);

          $_SESSION["CIN"]=$data["CIN"];
          $_SESSION["nom"]=$data["nom"];
          $_SESSION["note"]=$data["note"];
          Database::disconnect();
          header("location:consultation.php");
          
    
        }else{

            $_SESSION["directeur"]=$cin;
            header("location:saisir.php");
     }

}
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>authentification</title>
</head>
<body>
    <form action="" method="post" class="form">
    <table border=0>
        <tr><th>cin :</th><td><input type="text" name="cin" id="cin"></td></tr>
        <tr><th>mode pass:</th><td><input type="text" name="pwd" id="pwd"></td></tr>
        <tr><th>type</th><td><select  name="mylist">
            <option value="etudiant">etudiant</option>
            <option value="directeur">directeur</option>
</select></td></tr>
    </table>
   <input type="submit" name="valider" value="valider">
    </form>
    
    

</body>
</html>