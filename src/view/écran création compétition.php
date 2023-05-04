<?php
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Vérifier si les champs requis ont été remplis
    if(isset($_POST['DebutCompet']) && isset($_POST['FinCompet']) && isset($_POST['NbMatch'])){

        // Récupérer les valeurs des champs
        $debutCompet = $_POST['DebutCompet'];
        $finCompet = $_POST['FinCompet'];
        $nbMatch = $_POST['NbMatch'];

        // Faire quelque chose avec les données récupérées, par exemple :
        echo "Début de la compétition : ".$debutCompet."<br>";
        echo "Fin de la compétition : ".$finCompet."<br>";
        echo "Nombre de matchs : ".$nbMatch."<br>";

    } else {
        echo "Tous les champs sont obligatoires.";
    }
}
?>