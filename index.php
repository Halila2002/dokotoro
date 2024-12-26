

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


            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/img.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">la plateforme qui vous accompagne dans votre parcours de santé </h5>
                            <h1 class="text-white mb-4">Dokotoro - Votre guide de santé numérique</h1>

                            <p class="mb-5 fs-5">Que vous recherchiez des informations fiables, souhaitiez-vous former sur des sujets de bien-être ou ayez besoin d'être orienté vers des professionnels de santé, Dokotoro met à votre disposition une gamme complète de services. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/nm.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">la plateforme qui vous accompagne dans votre parcours de santé </h5>
                            <h1 class=" text-white mb-4">Dokotoro - Votre guide de santé numérique</h1>
                            <p class="mb-5 fs-5 animated slideInDown">Que vous recherchiez des informations fiables, souhaitiez-vous former sur des sujets de bien-être ou ayez besoin d'être orienté vers des professionnels de santé, Dokotoro met à votre disposition une gamme complète de services.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


       
    </section>
    
    <section class="black-section">
 
     <div class="container-fluid mt-5">
         <div class="row justify-content-center">
             <div class="col-md-10">
                 <div class="card ">
                         <h2 class="text-center" >Prendre un Rendez-vous</h2>
                     <div class="card-body">
                         <form>
                             <div class="form-container">
                                 <div class="form-group">
                                     <input type="text" class="form-control" id="nom" name="nom" placeholder=" votre nom" required>
                                 </div>
                                 <div class="form-group">
                                     <input type="date" class="form-control" id="date" name="date" required>
                                 </div>
                                 <div class="form-group">
                                     <input type="time" class="form-control" id="heure" name="heure" required>
                                 </div>
                                 <div class="form-group">
                                     <select class="form-control" id="docteur" name="docteur" required>
                                         <option value="">Sélectionner</option>
                                         <!-- Ajoutez ici les options pour sélectionner le docteur -->
                                     </select>
                                 </div>
                                 <div class="btn-container">
                                     <button type="submit" class="btn btn-primary  text-white">Prendre un Rendez-vous</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    
     <div class="text-card">
    <h3>Réseau de Soins de Santé</h3>
    <p> Nous vous offrons un accès facile à notre réseau de professionnels de santé, incluant des centres de santé<br>
     des tradipraticiens et des agents de santé. Trouvez les meilleurs soins pour votre bien-être <br>
         en consultant nos annuaires,  prenez rendez-vous en ligne et bénéficiez de<br>
         conseils et de traitements personnalisés. <br>
 </p>
 </div>
 </section>
 
 
     <div class="container hali">
         <div class="row">
         <div class="  col-md-4 mt-4">
                 <div class="card  text-center  " style=" height: 400px;">
                 <i class="fas fa-stethoscope fa-7x mt-4"></i>
                    <div class="card-body mt-3">
                         <h5 class="card-title" style=" font-weight:bold">Centre de santé</h5>
                         <p class="card-text mt-4"> Trouvez un centre de santé<br> près de chez vous,offrant <br> une variété de services <br> médicaux.</p>
                         <a href="hopital.php" class="btn btn-primary  text-white mt-2">En savoir plus</a>
                     </div>
                 </div>
             </div>
             <div class=" col-md-4 mt-4">
                 <div class="card text-center" style=" height: 400px;">
                 <i class="fas fa-stethoscope fa-7x mt-4"></i>
                    <div class="card-body mt-3">
                         <h5 class="card-title" style=" font-weight:bold">Tradipraticiens</h5>
                         <p class="card-text mt-4">Explorez les praticiens de la  <br>médecine traditionnelle, pour <br> des soins complémentaires <br> et naturels.</p>
                         <a href="tradipraticiens.php" class="btn btn-primary  text-white mt-2">En savoir plus</a>
                     </div>
                 </div>
             </div>
             <div class=" col-md-4 mt-4">
                 <div class="card text-center" style=" height: 400px;">
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
            .card-custom {
    height: 400px;
    margin-bottom: 100rem; /* Espace entre les cartes */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Optionnel : Ajoute une ombre légère autour des cartes */
}

        }
         .image-container img {
             width: 500px;
             height:450px;
             border-radius:20px;
             max-height: 700px; /* Hauteur maximale de 200 pixels */
             max-width: 100%; /* Assurez-vous que l'image ne dépasse pas de son conteneur */
         }

.black-section {
    background-color: black;
    height: 490px; /* Hauteur de la section, ajustez selon vos besoins */
    width: 100%; /* La section prendra 100% de la largeur de l'écran */
    margin-top: -48px;
  }

  .form-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Adjust the gap between elements */
}
.form-container .form-group {
    flex: 1;
    text-align: center;
}
.form-container .btn-container {
    display: flex;
    align-items: center;
    margin-bottom: 40px;;
}
.form-container .btn-container .btn {
    width: 100%; /* Full width for the button */
}


.card  {
    margin-top: -110px;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 2;
    height: 250px;
    text-align: center;
}

.card h2{
    margin-top: 70px;
    margin-bottom: 70px;
    margin-bottom: 20px;
    font-weight:bold; 
    font-size:1.5rem ;
    margin-bottom:10px;
}
.text-card h3 {
text-align: center;
font-weight: bold;
color: #efefef;
margin-top: 60px;
}
.text-card p{
    text-align: center;
    color: #efefef;
    font-weight: bold;
    margin-top: 40px;
}
.text-medecine h1{
    text-align: center;
    font-weight: bold;
    margin-top: 20px;
    font-style: italic;
}

.container .hali{
    margin-top: 10px;
}

     </style>
 


        <!-- About Start -->
        <div class="container-fluid about bg-light py-5" >
            <div class="container py-5" style="margin-top:20px">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                        <img src="img/chercheur.jpg" class="img-fluid rounded" style="object-fit: cover; max-height: 600px; width: 100%;" alt="Image principale">
                        <div class="about-img-inner">
                                <img src="img/img1.jpg" class="img-fluid rounded-circle"  style=" width: 300px; height: 300px;" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title  pe-3 mb-0">S'informer</h4>
                            <h3 class="display-15 mb-4 "  style="font-size: 20px;">Améliorer l'accès à l'information et aux soins de santé, tout en valorisant les pratiques de médecine traditionnelle et alternative.</h3>
                            <p class="mb-4" style=" ">Dokotoro est votre plateforme numérique dédiée à 
                                la santé et au bien-être. Nous vous offrons des ressources
                                 complètes pour vous informer, vous former et vous soigner.
                                  Que vous soyez à la recherche d'informations sur des pathologies, 
                                  de conseils en santé ou d'orientations vers des professionnels, vous êtes au bon endroit !  Elle vise à : </p>
                            <div class="mb-4">
                                <p class=""><i class="fa fa-check text-primary me-2"></i>Fournir des informations sanitaires et de santé publique à la population.</p>
                                <p class=""><i class="fa fa-check text-primary me-2"></i>Valoriser et mettre en avant la pharmacopée locale et les médecines alternatives.</p>
                                <p class=""><i class="fa fa-check text-primary me-2"></i> Promouvoir l'éducation et la sensibilisation du public aux bonnes pratiques de santé.</p>
                                <p class=""><i class="fa fa-check text-primary me-2"></i>Offrir des services d'orientation et de conseil aux patients sur les différentes options de soins, y compris la médecine traditionnelle et alternative.</p>
                                <p class=""><i class="fa fa-check text-primary me-2"></i>Faciliter les échanges et la collaboration entre les professionnels de santé et les patients ou le grand public.</p>


                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Voir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

       

        <!-- Feature Start -->
        <div class="container-fluid feature py-5" style="margin-bottom:300px">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Recettes Naturelles</h4>
                    </div>
                    <h3 class="display-7 mb-4" style="font-size: 20px;"> Recettes naturelles, conçues pour améliorer votre bien-être au quotidien</h3>
                    <p class="mb-0" >Ici, vous trouverez des remèdes à base d'ingrédients simples et accessibles, qui favorisent la santé physique et mentale. Que ce soit pour renforcer votre immunité, apaiser le stress ou soutenir votre digestion, nos recettes vous offrent des solutions douces et efficaces.</p>
                </div>

                <style>

            .card-custom {
             height: auto; /* Auto height for responsive design */
            margin: 10px 0; /* Adjust the margin to control the space between cards */
            text-align: center;           
         }
        

.card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Space between the cards */
           
        }
   
     
        .card img {
            width: 80%; /* Ajustez cette valeur pour contrôler la taille de l'image */
            height: auto; /* Conserve les proportions de l'image */
            border-radius: 10px; /* Bordures arrondies */
            margin: 20px auto; /* Centers the image */

              }
              @media (max-width: 767px) {
            .card-container {
                flex-direction: column; /* Stacks cards vertically on small screens */
            }
          
            
        }
    </style>
</head>
<body>

<div class="container-fluid mt-5">
    <div class="row card-container">
        <div class="col-lg-3 col-md-6">
            <div class="card card-custom text-center">
            <img src="img/img1.jpg" class="mx-auto">
                            <div class="card-body mt-3">
                    <h5 class="card-title" style="font-weight:bold, margin-bottom:-200px">Kinkeliba</h5>
                    <p class="card-text mt-4">Lorem ipsum dolor sit amet<br>consectetur adipiscing elit<br>consectetur adipiscing<br>adipiscing.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">

            <div class="card  card-custom text-center">
            <img src="img/img2.jpg" class="mx-auto">

                <div class="card-body mt-3">
                    <h5 class="card-title" style="font-weight:bold">L'artemesia frais</h5>
                    <p class="card-text mt-4">Lorem ipsum dolor sit amet<br>consectetur adipiscing elit<br>consectetur adipiscing<br>adipiscing.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-custom text-center">
            <img src="img/img1.jpg" class="mx-auto">
                            <div class="card-body mt-3">
                    <h5 class="card-title" style="font-weight:bold">Kinkeliba</h5>
                    <p class="card-text mt-4">Lorem ipsum dolor sit amet<br>consectetur adipiscing elit<br>consectetur adipiscing<br>adipiscing.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">

            <div class="card card-custom text-center">
            <img src="img/img2.jpg" class="mx-auto">

                <div class="card-body mt-3">
                    <h5 class="card-title" style="font-weight:bold">Feuille de Moringa</h5>
                    <p class="card-text mt-4">Lorem ipsum dolor sit amet<br>consectetur adipiscing elit<br>consectetur adipiscing<br>adipiscing.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Team Start -->
  


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Agents assermentés</h4>
                    </div>
                    <h3 class="display-7 mb-4" style="font-size: 20px;">Trouver des professionnels de santé assermentés de toutes spécialités </h3>
                    <p class="mb-0">Que vous ayez besoin d'un médecin généraliste, d'un spécialiste ou d'un thérapeute, notre annuaire vous permet de rechercher et de consulter des experts certifiés et reconnus. </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/med_fem.jpg" class="img-fluid rounded-top w-100" alt="">
                               
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Isdeen KOTO</h5>
                                <p class="mb-0">Gynecologue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item ">
                            <div class="team-img  h-100">
                                <img src="img/med_fem.jpg" class="img-fluid rounded-top w-100" alt="">
                               
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>ABDOUL Akim</h5>
                                <p class="mb-0">Theurapeute</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/img.jpg" class="img-fluid rounded-top w-100" alt="">
                               
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>ADAM Moudjabou</h5>
                                <p class="mb-0">Psychologue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/img33.jpg" class="img-fluid rounded-top w-100" alt="">
                               
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>SALIFOU Zouberou</h5>
                                <p class="mb-0">Cardiologue</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Team End -->
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Nos Abonnements</h4>
                    </div>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum sequi reiciendis dignissimos labore inventore ea accusantium doloribus explicabo minus iste repellendus voluptatem expedita neque porro ut, maiores reprehenderit enim minima? </p>
                </div>

        <div class="container " style ="margin-top:150px">
  <div class="row justify-content-center">
      <!-- Carte Accès Gratuit -->
      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card " style="height: 400px;">
              <div class="card-body text-center">
                  <h5 class="card-title">Accès Gratuit</h5>
                  <h6 class="card-subtitle mb-2 text-muted">0 FCFA</h6>
                  <div class="features">
                      <div><i class="fas fa-check-circle"></i> Accès à la bibliothèque de ressources santé</div>
                      <div><i class="fas fa-check-circle"></i> Recherche dans l'annuaire des praticiens</div>
                      <div><i class="fas fa-check-circle"></i> Participation à la communauté d'entraide</div>
                  </div>
                  <a href="#" class="btn btn-primary mt-3" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%);color:#efefef;">S'inscrire</a>
              </div>
          </div>
      </div>

      <!-- Carte Abonnement Bien-être -->
      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card " style="height: 400px;">
              <div class="card-body text-center">
                  <h5 class="card-title">Abonnement Bien-être</h5>
                  <h6 class="card-subtitle mb-2 text-muted">3 000 FCFA/mois</h6>
                  <div class="features">
                      <div><i class="fas fa-check-circle"></i> Tout l'accès gratuit</div>
                      <div><i class="fas fa-check-circle"></i> Programmes de suivi personnalisés</div>
                      <div><i class="fas fa-check-circle"></i> Vidéos et conseils d'experts</div>
                  </div>
                  <a href="#" class="btn btn-primary mt-auto" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%);color:#efefef;">S'abonner</a>
              </div>
          </div>
      </div>

      <!-- Carte Abonnement Santé -->
      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card "style="height: 400px;">
              <div class="card-body text-center">
                  <h5 class="card-title">Abonnement Santé</h5>
                  <h6 class="card-subtitle mb-2 text-muted">5 000 FCFA/mois</h6>
                  <div class="features">
                      <div><i class="fas fa-check-circle"></i> Tout l'accès Bien-être</div>
                      <div><i class="fas fa-check-circle"></i> Téléconsultations professionnelles</div>
                      <div><i class="fas fa-check-circle"></i> Rapports de suivi détaillés</div>
                      <div><i class="fas fa-check-circle"></i> Réductions partenaires</div>
                  </div>
                  <a href="#" class="btn btn-primary mt-auto" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); color:#efefef;" >S'abonner</a>
              </div>
          </div>
      </div>

      <!-- Carte Abonnement Famille -->
      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card " style="height:400px;">
              <div class="card-body text-center">
                  <h5 class="card-title">Abonnement Famille</h5>
                  <h6 class="card-subtitle mb-2 text-muted">8 000 FCFA/mois</h6>
                  <div class="features">
                      <div><i class="fas fa-check-circle"></i> Tout l'accès Santé pour 2 adultes</div>
                      <div><i class="fas fa-check-circle"></i> Gestion des profils familiaux</div>
                      <div><i class="fas fa-check-circle"></i> Priorité dans l'accès aux services</div>
                      <div><i class="fas fa-check-circle"></i> Programmes de prévention</div>
                  </div>
                  <a href="#" class="btn btn-primary  mt-auto"  style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%);color:#efefef;" >S'abonner</a>
              </div>
          </div>
      </div>
  </div>
</div>
<style>
    .features {
    text-align: left;
    margin-top: 1rem;
}

.features div {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 1rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.features i {
    color: #28a745;
    margin-right: 0.5rem;
    font-size: 1.25rem;
}
@media (max-width: 576px) {
    .card {
        margin-bottom: 1rem;
    }

    .card-body {
        padding: 1.5rem;
    }
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