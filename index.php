<?php
require_once 'db.php';
require_once 'species/Animaux.php';
require_once 'species/Tigre.php';
require_once 'species/Ours.php';
require_once 'species/Poissons.php';

require_once 'enclos/Enclos.php';
require_once 'enclos/Aquarium.php';
require_once 'enclos/Volière.php';
require_once 'employe/Employe.php';
require_once 'process/ajouter_employe.php';

$employes = getEmployes();

function getEmployes() {



    $conn = new PDO("mysql:host=localhost;dbname=Zoo", "root", "");

    $query = "SELECT * FROM employe";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $employes = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Création d'un objet Employe avec les données de chaque employé
        $employe = new Employe($row['nom'], $row['age'], $row['sexe']);
        $employes[] = $employe;
    }

  

    // Retourne un tableau d'objets Employe
    return $employes;
}

$enclos = getEnclos();

function getEnclos() {



    $conn = new PDO("mysql:host=localhost;dbname=Zoo", "root", "");

    $queryenclos = "SELECT * FROM enclos";
    $stmtenclos = $conn->prepare($queryenclos);
    $stmtenclos->execute();

    $enclos = [];
    while ($row = $stmtenclos->fetch(PDO::FETCH_ASSOC)) {
        $enclo = new Employe($row['type'], $row['propreté'], $row['nbanimaux']);
        $enclos[] = $enclo;
    }

  

    return $enclos;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    h1 {
    text-align: center;
    color: #fff;
    background-color: #000;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

body {
    text-align: center; 
    background-color: #f2f2f2;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-image: url("https://j.gifs.com/vnp1Aj.gif");
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
background-position: center;
}

#card {
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: inline-block;
}
h2{
    color: white;
}


</style>
</head>
<body>

    <h1>Mon Zoo</h1>

    <h2 class="pt-5 pb-5">Employés</h2>

   

        <?php foreach ($employes as $employe) { ?>
            <div id="card">
                <h3><?php echo $employe->getNom(); ?></h3>
                <p>Âge: <?php echo $employe->getAge(); ?></p>
                <p>Sexe: <?php echo $employe->getSexe(); ?></p>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Actions
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Menu employé</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Menu employé</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
     
      </div>
    </div>
  </div>
</div>

                
            </div>
        <?php } ?>
        </div>
        <div id="employe" class="pt-5">
            <button class="btn btn-dark" onclick="toggleModal()">Ajouter un employé</button>

            <div id="myModal" class="modal-dialog modal-dialog-centered pt-5" style="display: none;">
                <div class="modal-content">
                    
                    <form action="process/ajouter_employe.php" method="POST">
                        <label for="nom"></label>
                        <input type="text" name="nom" id="nom" required placeholder="Nom :"><br><br>

                        <label for="age"></label>
                        <input type="number" name="age" id="age" required placeholder="Age :"><br><br>

                        <label for="sexe"> </label>
                        <select name="sexe" id="sexe" required>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select><br><br>

                        <input type="submit" value="Ajouter" class="btn btn-dark">
                    </form>
                </div>
            </div>

            <script>
                function toggleModal() {
                    var modal = document.getElementById("myModal");
                    if (modal.style.display === "block") {
                        modal.style.display = "none";
                    } else {
                        modal.style.display = "block";
                    }
                }
            </script>



<h2 class="pt-5">Enclos</h2>


<?php 

$enclos = getEnclos();


foreach ($enclos as $enclo) { ?>

<div id="card">

<h3><?php echo $enclo->getNom(); ?></h3>

<p>Propreté: <?php echo $enclo->getPropre(); ?></p>

<p>Nombre d'animaux: <?php echo $enclo->getaInside(); ?></p>

<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

Actions

</button>
<?php } ?>
<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<h1 class="modal-title fs-5" id="staticBackdropLabel">Menu enclos</h1>

<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

</div>










    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
        

   




   
