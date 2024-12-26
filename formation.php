
<?php
require './bdd.php';

$stmt = $connexion->query('SELECT * FROM formation');
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
                        <a href="about.php" class="nav-item nav-link">A propos</a>
                        <a href="about1.php" class="nav-item nav-link">S'informer</a>
                        <a href="hopital.php" class="nav-item nav-link">Se soigner</a>
                        <a href="formation.php" class="nav-item nav-link active">Se former</a>

                       
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="rdv.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Reservez un Rdv</a>
                    <div class="icone" style="margin-left:20px">
                    <a href="#" class="nav-item nav-link"> <i class="fas fa-user"></i></a>
        
                </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Se former </h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active text-primary">Se former</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

<!--formation start -->
        <style>
        .training-section {
            margin-top: 50px;
        }
        @media (max-width: 768px) {
      .training-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
    }
        .training-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .training-item:hover {
            transform: scale(1.02);
        }
        .training-img {
            flex: 0 0 150px;
            height: 200px;
            margin-right: 20px;
            border-radius: 15px;
            object-fit: cover;
        }
        .training-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .training-title {
            font-weight: bold;
            font-size: 1.5em;
            margin-bottom: 10px;
            margin-top: 0;
        }
        .training-description {
            font-size: 1em;
            margin-bottom: 10px;
            text-align: justify;
        }
        h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }
        .training-item {
    display: flex;
    margin-bottom: 20px;
}

.training-img {
    width: 230px;
    height: 200px;
    object-fit: cover;
    
}

@media (max-width: 768px) {
      .training-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .training-img {
        margin-right: 0;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
      }

      .training-content {
        align-items: center;
      }
    }

.icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #333;
      transition: color 0.3s ease;
    }

    .icon:hover {
      color: #007bff; /* Changer la couleur au survol */
    }
.training-item:hover {
    background-color: #e0f7fa; /* Light blue background on hover */
}
    </style>
        <section class="container training-section">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Nos formations</h4>
                    </div>
                <p>Découvrez nos différentes formations pour sensibiliser et éduquer la population sur divers sujets de santé.</p>
            </div>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $photo = $row['photo'];
                $nom = $row['nom'];
                $description = $row['description'];
            ?>
                <div class="training-item">
                    <img src="<?php echo $photo; ?>" alt="Formation Image" class="training-img">
                    <div class="training-content">
                        <h3 class="training-title"><?php echo $nom; ?></h3>
                        <p class="training-description"><?php echo $description; ?></p>
                        <div class="training-icons">
                    <a href="#" class="icon"><i class="fas fa-video"></i></a>
                    <a href="#" class="icon"><i class="fas fa-file-alt"></i></a>
                    <a href="#" class="icon"><i class="fas fa-podcast"></i></a>
                  </div>
                    </div>
                </div>
            <?php } ?>
        </section>
        


         <!-- Footer Start -->
         <div class="container-fluid footer ">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Dokotoro</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Liens rapides</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> S'informer</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact </a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Prendre un rdv</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Notre equipe</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Dokotoro Services</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> S'informer</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Se soigner</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Se former</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Benin , Parakou</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> 90 82 16 90 </a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
         <!-- Copyright Start -->
         <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                
                   
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>