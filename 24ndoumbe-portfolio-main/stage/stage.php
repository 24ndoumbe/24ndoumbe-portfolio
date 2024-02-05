<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stage.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>MON STAGE</title>
</head>
 
<body>


<nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="https://24ndoumbe.github.io/24ndoumbe-portfolio/#Acceuil" class="menu-btn">Acceuil</a></li>
                <li><a href="https://24ndoumbe.github.io/24ndoumbe-portfolio/#Formation" class="menu-btn">Formation</a></li>
                <li><a href="https://24ndoumbe.github.io/24ndoumbe-competence/" class="menu-btn">Compétence</a></li>
                <li><a href="https://24ndoumbe.github.io/24ndoumbe-veille/" class="menu-btn">Veille Technologique</a></li>
                <li><a href="#" class="menu-horizontal">Stage</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <section class="Acceuil" id="Acceuil">
        <div class="max-width">
            <div class="Acceuil-content">
                
        </div>
    </section>

    <section class="stage" id="stage">
        <div class="max-width">
            <h2 class="title">STAGE</h2>


            <!--<div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <div class="text"></div>
                        <h1>1ere ANNEE</h1>
                        <p>J'ai fait un stage de 06 semaines du 23 mai au 01 juillet </p>
                    </div>
                </div>-->
                
                <h1>1ere ANNEE</h1>

                <br>
                <div class="column left">
                    <img src="02_LogoDampierreSans.png" alt="">
                </div>
                <p>
                    
                le lycee dampierre est une institution comprenant un lycee d'enseignement général et technologique un lycee professionnel, un pole enseignant supérieur et un centre de formation Valarep.
                </p>
                <br>
                <p> j'ai fait un stage de 06 semaines du 23 mai au 01 juillet 2022 au Lycée Privée Technologique et Professionnelle de DAMPIERRE à Valenciennes. J'ai fait mon stage dans le service informatique du Lycée; la tache était de faire un formulaire pour l'infirmière de lycée et dans le formulaire il devait y'avoir les coordonnées des lycéens, leurs numéros de sécurité social, les vaccins etc; en gros tous ce qu'il y a rapport avec la santé de l'éléve. C'est au parents de remplir le formulaire et aprés il recevait un e-mail de confirmation. Pour la réalisation on a utilisé Google Apps Script, Google Form et Google Sheet.</p>
 
                <br>
                <h1><a href="Stage1.pdf">Rapport de stage</a></h1>
                <br>
                <div class="card">
                    <div class="box">
                        <div class="text"></div>
                        <h1>2e ANNEE</h1>
                        <br>
                        <div class="column left">
                    <img src="lyceewatteau.jpg" alt="">
                </div>
                        <br>
                        <p>J'ai fait un stage de 05 semaines du 09 janvier au 09 février 2023 au Lycée Antoine Watteau. Le lycée Antoine Watteau est un lycée général technologique situé a Valenciennes et faisant partie de l'academie de Lille.</p>
                    <br>
                    <p> La tache du stage était de gérer le site web du lycée faire des modifications et créer des pages avec Wordpress.</p> </div>
                </div>

            </div>
        </div>
    </section>
    <section class="contact" id="contact">

    </section>



    <footer>
        <p id="contact">&copy;Contact : 07 58 94 36 97</p>
        <div class="row">
            <i class="fas fa-envelope"> joubidieye@gmail.com</i>
        </div>
        <div class="social-media">
            
            <p><i class="fab fa-github"><a href="https://github.com/24ndoumbe">github</a></i></p>
            <p><i class="fab fa-twitter"><a href="https://twitter.com/home">twitter</a></i></p>
            <p><i class="fab fa-instagram"><a href="https://www.instagram.com/instagram">instagram</a></i></p>
            <p><i class="fab fa-linkedin-in"><a href="https://www.linkedin.com/in/ndoumb%C3%A9-di%C3%A9ye-977186207/">linkedin</a></i></p>
        </div>
    </footer>

    <script src="script_portfolio.js"></script>


    <script src="jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.menu li').hover(function () {
                $('ul:first', this).stop().slideDown();

            }, function () {
                $('ul:first', this).stop().slideUp();
            }
            );
        });
    </script>


</body>


</html>