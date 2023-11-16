<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1_Calculatrice</title>
</head>
<body>
    <form action="calculatriceB.php" method="get">
        <div>
            <h1>Page d'accueil</h1>
            <p>Séléctionner une calculatrice </p>
       <input type="text" name="Typecalculatrice"  autofocus list="Typecalculatrice" autocomplete="on" id="">
 <datalist id="Typecalculatrice">
     <option value="">calculatriceBinaire</option>
     <option value=""> calculatriceUnire</option>>>
 </datalist>
 <button>Ouvrire</button>
</form>
</body>
</html>