<?php
    require './bdd.php'; // Assurez-vous de mettre le bon chemin vers votre fichier de connexion à la base de données

    $stmt = $connexion->query('SELECT * FROM hopital');
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
                        <a href="index.php" class="nav-item nav-link ">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
                        <a href="about1.php" class="nav-item nav-link">S'informer</a>
                        <a href="hopital" class="nav-item nav-link active">Se soigner</a>
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
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Se soigner</h4>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active text-primary">Se soigner</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
<style>
    .hospital-section{
        margin-top:50px;
    }
    .btn{
        color:white;
    }
    .hospital-section {
            margin-top: 50px;
        }
        .hospital-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .hospital-item:hover {
            transform: scale(1.02);
        }
        .hospital-img {
            flex: 0 0 150px;
            height: 150px;
            width: 150px;
            margin-right: 20px;
            border-radius: 15px;
            object-fit: cover;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .hospital-content {
            flex: 1;
        }
        .hospital-title {
            font-weight: bold;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .hospital-location {
            font-size: 1em;
            margin-bottom: 10px;
            color: #555;
        }
        .hospital-characteristics {
            font-size: 1em;
            margin-bottom: 10px;
        }
        .icon-container {
            margin-top: 10px;
        }
        .icon-container a {
            margin-right: 10px;
            font-size: 1.5em;
            color: #007bff;
        }

 
.contain{
    margin-bottom:10px;
    margin-top:-70px;
    justify-content:center;
}
h2{
    font-weight:bold;
    font-size:1.5rem;
    margin-top:20px;
    margin-bottom:20px;
}
        @media (min-width: 768px) {
            .hospital-section .row {
                display: flex;
                flex-wrap: wrap;
            }
            .hospital-section .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
   
    </style>


        <!-- Feature Start -->
        <body>
            <section class=" hospital-section ">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Se soigner avec Dokotoro</h4>
                    </div>
                    <h3 class="display-7 mb-4">Dokotoro vous facilite l'accès aux soins de santé, tout en valorisant les approches de médecine traditionnelle et alternative.</h3>
                </div>
                <div class="container mt-5" >
                <style>
    .card {
      width: 300px;
      margin: 0 auto;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .form-group {
      margin-bottom: 0;
    }

    .card-body {
      padding: 20px;
    }

    #results .result-item {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  

                <section class="container hospital-section">

    
    <div class="row">
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-md-6">
                <div class="hospital-item">
                    <img src="<?php echo $row['photo']; ?>" alt="Image de l'hôpital" class="hospital-img">
                    <div class="hospital-content">
                        <h3 class="hospital-title"><?php echo $row['nom']; ?></h3>
                        <p class="hospital-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['localisation']; ?></p>
                        <p class="hospital-characteristics"><?php echo $row['caracteristique']; ?></p>
                        <div class="icon-container">
                            <!-- Ajoutez vos liens d'icônes ici -->
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                            <a href="#"><i class="fas fa-directions"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!--features end-->



  
      
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
