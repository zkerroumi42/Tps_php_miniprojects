<?php 
include "database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>saisir</title>
</head>
<body>
    <form action="saisir.php" method="post">
        <table>
            <tr><th>N_inscription</th><th>nom</th><th>notes</th></tr>
            <?php 
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT num_insc, nom, note FROM notes";
                $q = $pdo->query($sql);
                foreach ($q as $row) {
                    echo "<tr><td>" . $row['num_insc'] . "</td><td>" . $row['nom'] . "</td><td>
                    <input type='text' name='note[" . $row['num_insc'] . "]' value='" . $row['note'] . "'></td></tr>";
                }
                Database::disconnect();
            ?>
        </table>
        <button type="submit" name="submit">Enregistrer</button>
    </form>
    
    <?php
    // Handling the form submission
    if (isset($_POST['submit'])) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        foreach ($_POST['note'] as $num_insc => $note) {
            // Update the database with the submitted note for each student
            $sql = "UPDATE notes SET note = :note WHERE num_insc = :num_insc";
            $query = $pdo->prepare($sql);
            $query->bindParam(':note', $note);
            $query->bindParam(':num_insc', $num_insc);
            $query->execute();
        }
        
        Database::disconnect();
        
        echo "Notes have been updated successfully!";
    }
    ?>
</body>
</html>
