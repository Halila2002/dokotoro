<?php
require './bdd.php';

$stmt = $connexion->query ('SELECT * FROM actualite');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dokotoro -</title>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                        <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">S'informer</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active text-primary">S'informer</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

  <!-- About Start -->
 
           

<div class="container py-5">
<section id="encyclopedia" class="">
        <div class="row align-items-center g-6">
          <!-- Colonne de l'image -->
          <div class="col-md-6">
            <img src="img/10780649_19198597.jpg"  class="img-fluid rounded" >
          </div>
          <!-- Colonne du texte -->
          <div class="col-md-6" >

          <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-3">
                    <h4 class="sub-title  pe-3 mb-0">S'informer</h4>
          
    </div>
</div>
            <h2>Encyclopédie médicale en ligne</h2>
            <p>
              Besoin d'en savoir plus sur une maladie, un symptôme ou un traitement ? Notre encyclopédie médicale en ligne vous permet de trouver rapidement les réponses à vos questions.
            </p>
            <ul>
              <li>Pathologies (maladies chroniques, infectieuses, rares, etc.)</li>
              <li>Symptômes (maux de tête, douleurs, fièvre, etc.)</li>
              <li>Traitements (médicaments, chirurgie, thérapies alternatives, etc.)</li>
              <li>Tests et examens médicaux</li>
              <li>Prévention et hygiène de vie</li>
             
            </ul>
          </div>
        </div>
      </section>
<!-- About End -->
   <!-- About Start -->
  
<section id="news" class="mb-5" style="margin-top:30px">
        <div class="container py-5  rounded">
          <!-- En-tête -->
      
          <!-- Texte explicatif -->
          <div class="row mb-4">
            
            <div class="col-md-6">
              
          <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-3">
                    <h4 class="sub-title  pe-3 mb-0">Actualités Santé</h4>
          
    </div>
</div>
            <h2>Améliorer votre santé.</h2>
              <ul class="list-unstyled">
                <p class="mb-4">Restez à la pointe de l'actualité médicale grâce à notre rubrique "Actualités santé" !</p> 
                <p class="mb-4">  Découvrez les dernières innovations, les avancées de 
                  la recherche, les conseils des experts et les sujets de santé publique qui font débat.
                </p>
                 <p class="mb-4"> Nos journalistes sélectionnent pour vous les informations les plus pertinentes et les décryptent pour 
                  vous apporter un éclairage complet.
                 </p>
                <p class="mb-4">Vous pouvez également vous abonner à notre newsletter pour recevoir régulièrement un condensé
                   de l'actualité santé. 
                  </p>

              </ul>
              <a href="#" class="btn btn-outline-primary mx-2">S’abonner à la newsletter</a>

            </div>
            <div class="col-md-6">
              <img src="img/female.jpg" alt="Actualités médicales" class="img-fluid rounded">
            </div>
          </div>
 <!-- Zone d'appel à l'action -->
  <section style=" margin-top:100px">
 
      <section id="health-directory-forum mb-4" style="padding-left: 20px; padding-right: 20px;">
        <div class="container">
      
          <!-- Annuaire et Forum côte à côte -->
          <div class="row mb-5">
            <!-- Annuaire des professionnels de santé -->
            <div class="col-md-6" style="padding-right: 15px;">
              <h4 class="">Annuaire des professionnels de santé</h4>
              <p>Vous cherchez un médecin, un spécialiste ou un autre professionnel de santé ? Notre annuaire en ligne vous permet de trouver facilement les coordonnées et les informations détaillées sur les praticiens présents dans votre région.</p>
              <ul>
                <li><strong>Les coordonnées complètes :</strong> Adresse, numéro de téléphone, horaires, etc.</li>
                <li><strong>Les diplômes, spécialités et domaines d'intervention.</strong></li>
                <li><strong>Les langues parlées.</strong></li>
                <li><strong>Les moyens de prise de rendez-vous :</strong> Téléphone, en ligne, etc.</li>
                <li><strong>Les tarifs pratiqués.</strong></li>
                <li><strong>Les avis et notes des patients.</strong></li>
              </ul>
              <p>Vous pouvez affiner votre recherche par spécialité, par localisation ou par d'autres critères.</p>
              <p>Une fois votre professionnel de santé identifié, vous pouvez prendre rendez-vous en ligne directement depuis son profil.</p>
            </div>
      
            <!-- Forum de discussion -->
            <div class="col-md-6" style="padding-left: 15px;">
              <h4 class="">Rejoignez notre forum de discussion</h4>
              <p>Participez à notre forum de discussion pour poser vos questions, partager vos expériences ou obtenir des conseils d'autres utilisateurs. C'est un espace d'échange sur des sujets de santé, géré par des professionnels et des utilisateurs passionnés.</p>
              <p>Que vous soyez à la recherche de réponses à des questions de santé spécifiques ou souhaitez discuter de sujets d'actualité médicale, notre forum vous permet de dialoguer librement dans un environnement sécurisé.</p>
              <a href="#" class="btn btn-outline-primary btn-lg">Rejoindre le forum</a>
            </div>
          </div>
      
        </div>
      </section>

      <div class="text-center mb-4">
           <h4> Voir les dernières actualités</h4>
          </div>
      <!-- Exemples d’actualités récentes -->
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <img src="img/flat-coronavirus-vaccination-record-card-template_23-2148953253.jpg" alt="Article 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Nouvelle thérapie pour le diabète</h5>
              <p class="card-text">Les chercheurs ont découvert une approche révolutionnaire...</p>
              <a href="#" class="btn btn-link">Lire l'article</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <img src="img/doctor-ophthalmologist-s-office.jpg" alt="Article 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Vaccination : les dernières statistiques</h5>
              <p class="card-text">Les résultats montrent une amélioration significative...</p>
              <a href="#" class="btn btn-link">Lire l'article</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <img src="img/high-angle-diabetic-woman-checking-her-glucose-level_23-2150775213.jpg" alt="Article 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Alimentation et prévention des maladies</h5>
              <p class="card-text">Un régime équilibré peut réduire les risques de...</p>
              <a href="#" class="btn btn-link">Lire l'article</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <div class="container mt-5">
  <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">A la une </h4>
                    </div>
                </div>

  <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $photo = $row['photo'];
    $titre = $row['titre'];
    $date = $row['date'];
    $description = $row['description'];
  ?>
    <div class="row actualite d-flex align-items-start">
      <div class="col-md-4">
        <!-- Image à gauche -->
        <div class="image-container">
          <img src="<?php echo $photo; ?>" class="img-fluid" alt="Actualité">
        </div>
      </div>
      <div class="col-md-8">
        <!-- Texte descriptif à droite -->
        <div class="p-4">
          <h3 ><?php echo $titre; ?></h3>
          <p class="date-publication">Publié le <?php echo $date; ?></p>
          <p class="description"><?php echo $description; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<div class="container mt-5">
  <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Carte Sanitaire </h4>
                    </div>
                </div>
    <div id="map"></div>
  </div>

  <script>
    function initMap() {
      // Localisation initiale (par exemple, centre d'une ville)
      const location = { lat: 9.7026, lng: 1.6664 };  // Coordonnées de Djougou, Bénin
      // Création de la carte
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: location,
      });
      // Ajouter un marqueur initial
      const marker = new google.maps.Marker({
        position: location,
        map: map,
        title: "Djougou Centre",
      });
      // Exemple de points d'intérêt
      const pointsOfInterest = [
        { lat: 9.7041, lng: 1.6653, title: "Hôpital Général" },
        { lat: 9.6988, lng: 1.6619, title: "Pharmacie Centrale" },
        { lat: 9.7059, lng: 1.6701, title: "Clinique Médicale" }
      ];
      pointsOfInterest.forEach(point => {
        new google.maps.Marker({
          position: { lat: point.lat, lng: point.lng },
          map: map,
          title: point.title,
        });
      });
    }
  </script>

  <!-- Charger l'API Google Maps avec votre clé API -->
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
  </script>

      
     


       


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
  
  