<?php
// Définir les produits dans un tableau associatif imbriqué
$produits = array(
    array(
        'nom' => 'Produit 1',
        'prix' => 10,
        'tva' => 0.20,
        'quantite' => 2
    ),
    array(
        'nom' => 'Produit 2',
        'prix' => 15,
        'tva' => 0.15,
        'quantite' => 1
    ),
    array(
        'nom' => 'Produit 3',
        'prix' => 20,
        'tva' => 0.10,
        'quantite' => 3
    )
);

// Calculer le sous-total et le total de la facture
$sous_total = 0;
foreach ($produits as $produit) {
    $prix_ttc = $produit['prix'] * (1 + $produit['tva']);
    $sous_total += $prix_ttc * $produit['quantite'];
}
$total = $sous_total;

// Afficher la balise de titre H1 "Facture"
echo "<h1>Facture</h1>";

// Afficher la liste des produits avec les sous-totaux
echo "<table >";
echo "<tr><th>Produit</th><th>Prix unitaire</th><th>TVA</th><th>Quantité</th><th>Sous-total</th></tr>";
foreach ($produits as $produit) {
    $prix_ttc = $produit['prix'] * (1 + $produit['tva']);
    $sous_total_produit = $prix_ttc * $produit['quantite'];
    echo "<tr><td>{$produit['nom']}</td><td>{$produit['prix']}</td><td>{$produit['tva']}</td><td>{$produit['quantite']}</td><td>{$sous_total_produit}</td></tr>";
}
echo "</table>";

// Afficher le total de la facture
echo "<p>Total : {$total}</p>";
?>

