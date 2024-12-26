<?php
require './bdd.php';

$stmt = $connexion->query ('SELECT * FROM actualite');
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
                        <a href="index.php" class="nav-item nav-link">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link active">A propos</a>
                        <a href="about1.php" class="nav-item nav-link">S'informer</a>
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


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">A propos</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active text-primary">A propos</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

 <!-- About Start -->

 <!-- Section Notre Vision -->
  
 <div class="col-md-12">
      <div class="vision-section text-center p-4">
      <div class=" mb-3 mt-3 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="sub-style">
                        <h4 class=" px-3 mb-0 ">Notre vision</h4>
                 </div>
                </div>
          <p class="vision-text">Nous croyons en une approche holistique de la santé, qui combine les bénéfices de la médecine conventionnelle et les savoirs ancestraux des médecines traditionnelles. Notre objectif est de donner aux utilisateurs les moyens de prendre en charge leur santé de manière autonome et éclairée.</p>
      </div>
  </div>
 
            <div class="section-title mb-5 mt-5 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0 ">Nos Valeurs</h4>
                 </div>
                </div>
 <div class="container my-5">
 <div class="row">
        <!-- Carte Accessibilité -->
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-wheelchair fa-3x"></i>
                    <h5 class="card-title mt-3">Accessibilité</h5>
                    <p class="card-text">Rendre les informations et les services de santé facilement accessibles à tous.</p>
                </div>
            </div>
        </div>

        <!-- Carte Ouverture d'esprit -->
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-brain fa-3x"></i>
                    <h5 class="card-title mt-3">Ouverture d'esprit</h5>
                    <p class="card-text">Promouvoir une vision inclusive de la santé, en valorisant les différentes approches thérapeutiques.</p>
                </div>
            </div>
        </div>

        <!-- Carte Empowerment -->
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield fa-3x"></i>
                    <h5 class="card-title mt-3">Empowerment</h5>
                    <p class="card-text">Permettre aux utilisateurs de devenir des acteurs actifs de leur santé.</p>
                </div>
            </div>
        </div>

        <!-- Carte Collaboration -->
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-hands-helping fa-3x"></i>
                    <h5 class="card-title mt-3">Collaboration</h5>
                    <p class="card-text">Favoriser les échanges et la synergie entre professionnels de santé, patients et grand public.</p>
                </div>
            </div>
        </div>
    </div>
            <div class="section-title mb-5 mt-5 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0 ">Nos services clés</h4>
                 </div>
                </div>
            <!-- Section des Services Clés -->
 <div class="row">
     <!-- Carte Bibliothèque de ressources santé -->
     <div class="col-md-3">
         <div class="card">
             <div class="card-body text-center">
                 <i class="fas fa-book fa-3x"></i>
                 <h5 class="card-title mt-3">Bibliothèque de ressources santé</h5>
                 <p class="card-text">Accès à des informations fiables et validées sur différentes thématiques de santé.</p>
             </div>
         </div>
     </div>

     <!-- Carte Annuaire des praticiens -->
     <div class="col-md-3">
         <div class="card">
             <div class="card-body text-center">
                 <i class="fas fa-stethoscope fa-3x"></i>
                 <h5 class="card-title mt-3">Annuaire des praticiens</h5>
                 <p class="card-text">Recherche et prise de rendez-vous avec des professionnels de santé certifiés.</p>
             </div>
         </div>
     </div>

     <!-- Carte Programmes de suivi personnalisés -->
     <div class="col-md-3">
         <div class="card">
             <div class="card-body text-center">
                 <i class="fas fa-calendar-check fa-3x"></i>
                 <h5 class="card-title mt-3">Programmes de suivi personnalisés</h5>
                 <p class="card-text">Accompagnement numérique pour la gestion de certaines pathologies ou conditions de santé.</p>
             </div>
         </div>
     </div>

     <!-- Carte Communauté d'entraide -->
     <div class="col-md-3">
         <div class="card">
             <div class="card-body text-center">
                 <i class="fas fa-users fa-3x"></i>
                 <h5 class="card-title mt-3">Communauté d'entraide</h5>
                 <p class="card-text">Échanges et partage d'expériences entre utilisateurs.</p>
             </div>
         </div>
     </div>
 </div>
</div>
    </div>
 </div>  
 
  <!-- Section Notre Engagement -->
  
  <div class="col-md-12">
      <div class="vision-section text-center p-4">
      <div class=" mb-3 mt-3 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="sub-style">
                        <h4 class=" px-3 mb-0 ">Notre Engagement</h4>
                 </div>
                </div>
          <p class="vision-text">Nous croyons en une approche holistique de la santé, qui combine les bénéfices de la médecine conventionnelle et les savoirs ancestraux des médecines traditionnelles. Notre objectif est de donner aux utilisateurs les moyens de prendre en charge leur santé de manière autonome et éclairée.</p>
      </div>
  </div>

   <!-- Section Notre Equipe -->
  
   <div class="col-md-12">
      <div class=" text-center p-4">
      <div class=" mb-3 mt-3 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="sub-style">
                        <h4 class=" px-3 mb-0 ">Notre Equipe</h4>
                 </div>
                </div>
          <p class="">Dokotoro a été fondée par une équipe pluridisciplinaire composée de professionnels de santé, de spécialistes du numérique et d'experts en médecines traditionnelles. Ensemble, nous mettons nos compétences au service de l'amélioration de l'accès aux soins de santé.
          </p>
      </div>
  </div>
  <div class="container my-5">
    <div class="row">
        <!-- Carte Équipe 1 -->
        <div class="col-md-3">
            <div class="card team-card">
                <img src="img/femme.jpg" class="card-img-top" alt="Nom de l'équipe 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Abdoul Akim</h5>
                    <p class="card-text">Copywritter</p>
                </div>
            </div>
        </div>

        <!-- Carte Équipe 2 -->
        <div class="col-md-3">
            <div class="card team-card">
                <img src="img/chercheur.jpg" class="card-img-top" alt="Nom de l'équipe 2">
                <div class="card-body text-center">
                    <h5 class="card-title">ADAM Moudjabou</h5>
                    <p class="card-text">Graphiste</p>
                </div>
            </div>
        </div>

        <!-- Carte Équipe 3 -->
        <div class="col-md-3">
            <div class="card team-card">
                <img src="img/chercheur.jpg" class="card-img-top" alt="Nom de l'équipe 3">
                <div class="card-body text-center">
                    <h5 class="card-title">KOTO Isdeen</h5>
                    <p class="card-text">Developpeur</p>
                </div>
            </div>
        </div>

        <!-- Carte Équipe 4 -->
        <div class="col-md-3">
            <div class="card team-card">
                <img src="img/docteur homme.jpg" class="card-img-top" alt="Nom de l'équipe 4">
                <div class="card-body text-center">
                    <h5 class="card-title">PANPANGOU Akim</h5>
                    <p class="card-text">Eleve</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2rem;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card-text {
    font-size: 1rem;
}



.card {
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px; /* Ajoute de l'espace en bas de chaque carte */
}

.card-body {
  padding: 2rem;
}

.card-title {
  font-size: 1.25rem;
  font-weight: bold;
}

.card-text {
  font-size: 1rem;
}

.card {
        flex: 1;
    }
    
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-text {
        flex-grow: 1;
    }

/* Espacement supplémentaire pour les petits écrans */
@media (max-width: 768px) {
  .col-md-3 {
      margin-bottom: 20px; /* Ajoute de l'espace en bas des colonnes */
  }
}
.vision-section {
  background-color: #f8f9fa;
  overflow: hidden; /* Aucun défilement à l'intérieur de la section */
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  margin-top: 2rem;
}

.vision-section h2 {
  font-size: 1.75rem;
  font-weight: bold;
  color: #007bff;
}

.vision-text {
  font-size: 1.125rem;
  color: #333;
  line-height: 1.6;
}
.team-card {
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

.team-card .card-img-top {
  border-radius: 10px 10px 0 0;
  height: 300px; /* Ajuste la hauteur de l'image */
  object-fit: cover; /* Pour que l'image s'adapte bien à la taille */
}

.team-card .card-title {
  font-size: 1.25rem;
  font-weight: bold;
  margin-top: 10px;
}

.team-card .card-text {
  font-size: 1rem;
  color: #666;
}


</style>

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
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

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