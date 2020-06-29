<?php 
$nom_produit = "T-shirt simple";
echo "Nom Du produit = ";
echo $nom_produit ;

echo "<br>";

$couleur = "Blanc"; 
echo "Couleur = ";
echo $couleur ;

echo "<br>";

$prix = 10.50;
echo "Prix = ";
echo $prix;

echo "<br>";

$disponibilité = "true";
echo "Disponible = ";
echo $disponibilité;

echo "<br>";

$quantité = 10;
echo "Quantité = ";
echo $quantité; ?>

<h3>
    <?php 
    echo "<br>";
    echo "Le nom du produit est ";
    echo $nom_produit;

    echo "<br>";

    echo "Il reste ";
    echo $quantité;
    echo " produit en stock";

    echo "<br>";

    echo "Le produit ";
    echo $nom_produit;
    echo " est de couleur ";
    echo $couleur; ?>
</h3>

<h4>
    <?php
    $nombre = 10.50 * 3 ; 
    echo "Acheter 3 produits couterait ";
    echo $nombre;
    echo " €";

    echo "<br>";

    $nombre2 = 10 * 10.50 ;
    echo "Acheter la totalité des produits disponibles couterait ";
    echo $nombre2;
    echo " €";

    echo "<br>";

    $nombre3 = 10 - 3 ;
    echo "Si 3 produits sont vendus, il reste ";
    echo $nombre3;
    echo " produits en stock."

    ?>

</h4>

<p>
    <?php 

    if ($disponibilité = true)
    {
        echo "Le produit ";
        echo $nom_produit;
        echo " est disponible en ligne"; 
    }

    elseif ($disponibilité = false)
    {
        echo "Le produit";
        echo $nom_produit;
        echo" n'est malheureusement plus disponible";
    } ;?>

</p>

<p>
    <?php 
    if ($quantité > 5 )
    {
        echo "Il reste ";
        echo $quantité;
        echo " produits en magasins ";
    }

    if ($quantité < 5)
    {
        echo "Il ne reste plus que ";
        echo $quantité;
        echo " produits en magasins";
    }

    echo "<br>";

    if ($quantité = 1)
    {
        echo "Il ne reste qu'un produit en magasin";
    }

    if ($quantité = 0)
    {
        echo "Il ne reste plus de produits en magsins";
    } ;?>


</p>