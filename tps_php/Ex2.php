<?php
//   $dateNaissance = "04-02-2003";
//   $aujourdhui = date("Y-m-d");
//   $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
//   echo 'Votre age est '.$diff->format('%y');


class employer{
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateEnbauche;
    private $salaire;

    public function __get($attr){
        return $this->$attr;
    }
    public function __set($attr,$val){
        $this->$attr=$val;
    }

    public function __construct($matricule,$nom,$prenom,$dateNaissance,$dateEnbauche,$salaire){
     $this->matricule=$matricule;
     $this->nom=$nom;
     $this->prenom=$prenom;
     $this->dateNaissance=$dateNaissance;
     $this->dateEnbauche=$dateEnbauche;
     $this->salaire=$salaire;
   }

   public function age(){
     $aujourdhui = date("Y-m-d");
     $diff = date_diff(date_create($aujourdhui),date_create($this->dateNaissance));
     return $diff->format('%y');

   }


}

$emp1=new employer("engineer","zakaria","kerroumi","04-02-2003","01-01-2001",10000);
echo $emp1->age();
echo $emp1->nom;
$emp1->nom="mohamed";
echo $emp1->nom;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>
<body>
    
</body>
</html>