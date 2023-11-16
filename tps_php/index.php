<?php
class chainePlus 
{
    
    private $chaine;
    
  public function __set($ch,$va) {
    $this->$ch= $va;
   }

  public function __get($ch) {
    return $this->$ch;
  }

  public function majuscul(){
  return "<p style=' text-transform:uppercase;'>$this->chaine </p>" ;
  }

  public function italic(){
    return "<i>$this->chaine </i> <br>" ;
    }

    public function souligne(){
        return " <u>$this->chaine</u> <br> " ;
        }

        public function gras(){
            return "<b>$this->chaine</b> <br>" ;
            }
   

}


$obj1 = new chainePlus();
$obj1->chaine="programation orienté objetnen php";
echo $obj1->gras();
echo $obj1->italic();
echo $obj1->souligne();
echo $obj1->majuscul();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>page1</title>
</head>
<body >
    
</body>
</html>