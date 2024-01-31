<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];

    // Valider les données (effectuer des vérifications supplémentaires si nécessaire)

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Zoo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion à la base de données
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête SQL pour insérer les données dans la table appropriée
    $sql = "INSERT INTO employe (nom, age, sexe) VALUES ('$nom', '$age', '$sexe')";

    if ($conn->query($sql) === TRUE) {
        echo "Données ajoutées avec succès à la base de données.";
    } else {
        echo "Erreur lors de l'ajout des données à la base de données : " . $conn->error;
    }
header('Location: ../index.php');
}



