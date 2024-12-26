



     

<?php
session_start();


require 'bdd.php'; // Inclure le fichier de connexion à la base de données

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour vérifier l'existence du médecin dans la base de données
    $query = "SELECT login_id, email, password FROM login WHERE email = ?";
    $stmt = $connexion->prepare($query);
    $stmt->execute([$email]);
    $row = $stmt->fetch();

    if($row) {
        // Vérifier si le mot de passe est correct
        if(password_verify($password, $row['password'])) {
            // Authentification réussie, créer une session et rediriger vers le tableau de bord
            $_SESSION['login_id'] = $row['login_id'];
            header("Location: index.html");
            exit();
        } else {
            // Mot de passe incorrect
            $error = "Mot de passe incorrect";
        }
    } else {
        // Médecin non trouvé avec cet e-mail
        $error = "Aucun médecin trouvé avec cet e-mail";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dokotoro</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


      


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">Dokotoro</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">S'informer</a>
                        <a href="hopital.php" class="nav-item nav-link">Se soigner</a>
                        <a href="formation.php" class="nav-item nav-link">Se former</a>

                       
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="rdv.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Reservez un Rdv</a>
                    <div class="icone" style="margin-left:20px">
                    <a href="#" class="nav-item nav-link"> <i class="fas fa-user"></i></a>
        
                </div>
                  </div>
            </nav>

        <!-- Navbar End -->
        <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 200px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <h2 class="text-center mb-4">Bienvenue</h2>
                    <p class="text-center">Connectez-vous pour accéder à votre compte.</p>                    </div>
                    <div class="card-body">
                        <?php if(isset($error)) { ?>
                            <p class="text-danger"><?php echo $error; ?></p>
                        <?php } ?>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" style="margin-bottom:-40px; margin-right:200px ;">Se connecter</button>
                        </form>
                        <p class="mt-5">Pas encore inscrit ? <a href="register.php">S'inscrire ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Liens vers les scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>