

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <!-- Add more items here -->
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1>Dashboard</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class=" mb-4">
                            <div class="card-body">
                                <input type="text" class="form-control input-title" style="width: 60em;">
                            </div>
                            <div class="card-body">
                                <p class="card-text">Card content goes here.</p>
                            </div>
                        </div>
                    </div>
                    <?php
require './bdd.php'; // Inclure le fichier de connexion

// Récupérer les données des médecins
$query = 'SELECT * FROM docteur'; // Assurez-vous que 'docteur' est le nom correct de votre table
$stmt = $connexion->query($query); // Utiliser $pdo pour la requête
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Médecins</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .doctor-photo {
            width: 2px;
            height: 2px;
            border-radius: 50%;
        }
        .action-icons {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Liste des Médecins</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Spécialité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stmt as $doctor): ?>
                <tr>
                    <td><img src="<?php echo htmlspecialchars($doctor['photo']); ?>" alt="Photo du médecin" class="doctor-photo" style=" height: 40px; width:40px; border-radius:50px"></td>
                    <td><?php echo htmlspecialchars($doctor['nom']); ?></td>
                    <td><?php echo htmlspecialchars($doctor['specialite']); ?></td>
                    <td class="action-icons">
                        <a href="#" class="btn btn-success btn-sm" title="Ajouter"><i class="fas fa-plus"></i></a>
                        <a href="#" class="btn btn-warning btn-sm" title="Modifier"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Supprimer"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
</body>
</html>
<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>
<style>
  /* styles.css */
body {
    font-family: Arial, sans-serif;
}

#sidebar {
    height: 100vh;
    background-color: #f8f9fa;
}

.card {
    border-radius: 0.5rem;
}

.card-header {
    background-color: #007bff;
    color: #fff;
}

.card-body {
    background-color: #fff;
}

.nav-link.active {
    background-color: #007bff;
    color: #fff;
}

</style>

<div class="container hali">
         <div class="row">
         <div class="  col-md-4 mb-4">
                 <div class="card  text-center " style=" height: 400px;">
                 <i class="fas fa-stethoscope fa-7x mt-4"></i>
                    <div class="card-body mt-3">
                         <h5 class="card-title" style=" font-weight:bold">Centre de santé</h5>
                         <p class="card-text mt-4"> Trouvez un centre de santé<br> près de chez vous,offrant <br> une variété de services <br> médicaux.</p>
                         <a href="hopital.php" class="btn btn-primary  text-white mt-2">En savoir plus</a>
                     </div>
                 </div>
             </div>
             <div class=" col-md-4 mb-4">
                 <div class="card text-center " style=" height: 400px;">
                 <i class="fas fa-stethoscope fa-7x mt-4"></i>
                    <div class="card-body mt-3">
                         <h5 class="card-title" style=" font-weight:bold">Tradipraticiens</h5>
                         <p class="card-text mt-4">Explorez les praticiens de la  <br>médecine traditionnelle, pour <br> des soins complémentaires <br> et naturels.</p>
                         <a href="tradipraticiens.php" class="btn btn-primary  text-white mt-2">En savoir plus</a>
                     </div>
                 </div>
             </div>
             <div class=" col-md-4 mb-4">
                 <div class="card text-center " style=" height: 400px;">
                 <i class="fas fa-cloud-sun-rain fa-7x mt-4"></i>
                    <div class="card-body mt-3">
                         <h5 class="card-title" style=" font-weight:bold">Agent de santé</h5>
                         <p class="card-text mt-4"> Accédez à des professionnels de santé <br> qualifiés,  tels que des infirmiers, <br> des sage-femmes et des <br> pharmaciens.</p>
                         <a href="doctor.php" class="btn btn-primary  text-white mt-2">En savoir plus</a>
                     </div>
                 </div>
             </div>
             
         </div>
     </div>
   

 <style>
         .image-container {
             display: flex;
             justify-content: flex-end; /* Aligner l'image à droite */
             align-items: center; /* Centre l'image verticalement */
             margin-top:50px
         }

         @media (max-width: 767px) {
            .card-container {
                flex-direction: column; /* Stacks cards vertically on small screens */
            }
          
        }
         .image-container img {
             width: 500px;
             height:450px;
             border-radius:20px;
             max-height: 700px; /* Hauteur maximale de 200 pixels */
             max-width: 100%; /* Assurez-vous que l'image ne dépasse pas de son conteneur */
         }
        .card-custom {
    height: 400px;
    margin-bottom: 1.5rem; /* Espace entre les cartes */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Optionnel : Ajoute une ombre légère autour des cartes */
}

.card-body p {
    margin-bottom: 1rem; /* Espace au bas du texte */
}

@media (max-width: 767px) {
    .card-custom {
        height: auto; /* Adapte la hauteur des cartes sur petits écrans */
    }
}

         </style>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encyclopédie Médicale en Ligne</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .encyclopedia-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .encyclopedia-header {
            margin-bottom: 30px;
        }
        .encyclopedia-list {
            list-style-type: none;
            padding-left: 0;
        }
        .encyclopedia-list li {
            margin-bottom: 10px;
        }
        .encyclopedia-list li::before {
            content: "•";
            color: #007bff; /* Change to your preferred color */
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
</head>
<body>

    <div class="container encyclopedia-section">
        <div class="row">
            <div class="col-md-12 text-center encyclopedia-header">
                <h2>Encyclopédie Médicale en Ligne</h2>
                <p>Besoin d'en savoir plus sur une maladie, un symptôme ou un traitement ? Notre encyclopédie médicale en ligne vous permet de trouver rapidement les réponses à vos questions.</p>
            </div>
            <div class="col-md-12">
                <p>Grâce à des articles rédigés par des professionnels de santé, vous découvrirez des informations fiables et détaillées sur une multitude de sujets liés à votre santé :</p>
                <ul class="encyclopedia-list">
                    <li>Pathologies (maladies chroniques, infectieuses, rares, etc.)</li>
                    <li>Symptômes (maux de tête, douleurs, fièvre, etc.)</li>
                    <li>Traitements (médicaments, chirurgie, thérapies alternatives, etc.)</li>
                    <li>Tests et examens médicaux</li>
                    <li>Prévention et hygiène de vie</li>
                </ul>
                <p>Vous pouvez effectuer vos recherches par mot-clé, par catégorie ou en utilisant notre moteur de recherche avancé.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
