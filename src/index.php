<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="16x16"  href="./assets/img/favicon/favicon-16x16.png">
    <title>Amand'Innov</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/index.css" rel="stylesheet">

    <script src="./assets/js/menu.js" defer></script>
    <script src="./assets/js/modaleContact.js" defer></script>
    <script src="./assets/js/showHide.js" defer></script>
    <script src="./assets/js/intersect.js" defer></script>

</head>

<body>
    <?php require_once './partials/header.php' ?>
    <?php require_once './partials/contact/contactFonctions.php' ?>

    <section class="entete">
        <div class="cadre"></div>
        <div class="text-entete">
            <h1 id="accueil">Je conçois et développe <span>votre site Internet</span></h1>
            <p class="text-secondary">Du design à l'hébergement, je donne vie à la présence en ligne de votre entreprise, de manière unique et sur-mesure.</p>

        </div>
        <div class="fleche bounce"><a href="#services" class=""><i class="fa-solid fa-circle-chevron-down"></i></a></div>
    </section>
    <section id="services" class="">
        <h2>Les services proposés :</h2>
        <div class="grille ">
            <div class="service conceptionDiv grille6">
                <h3 id="conception"><i class="fa-regular fa-pen-to-square"></i> Conception sur Mesure</h3>
                <div id="detailConception" class="reveal">
                    <p>Vous travaillez dur pour vous différencier ?</p>
                    <p>C'est la raison pour laquelle je crois en la singularité de chaque entreprise. Par conséquent, je crée des sites Internet entièrement sur-mesure, reflétant l’identité de votre marque, et répondant à vos objectifs commerciaux uniques.</p>
                </div>
            </div>
            <div class="service utilisateurDiv intersectright grille6">
                <h3 id="utilisateur"><i class="fa-solid fa-users"></i> Prise en compte de l'expérience Utilisateur</h3>
                <p id="detailUtilisateur" class="reveal">Je mets l’Utilisateur au coeur du processus de conception. En analysant les comportements des utilisateurs, je conçois des interfaces conviviales qui maximisent l’engagement et améliorent l’expérience Utilisateur.</p>
            </div>
            <div class="service designDiv grille3">
                <h3 id="design"><i class="fa-solid fa-display"></i> Un site aussi efficace sur mobile</h3>
                <p id="detailDesign" class="reveal">Les temps ont changé, et votre site doit s’adapter. Toutes les études disent qu'aujourd'hui la majeur partie des gens utilisent une tablette ou un smartphone pour consulter un site. Tous nos sites Internet sont conçus avec une approche “responsive”, garantissant une expérience fluide et attrayante même, et surtout, sur tablette et mobile.</p>
            </div>
            <div class="grille4 sm-hidden">
                <img src="./assets/img/ordinateur.png" alt="responsive">
            </div>
            <div class="service ecouteDiv intersectright grille3">
                <h3 id="ecoute"><i class="fa-solid fa-microphone"></i> Écoute et Adaptabilité</h3>
                <p id="detailEcoute" class="reveal">L’écoute de mes clients est essentielle à mes yeux. Chaque projet commence par une écoute attentive de vos besoins, objectifs et contraintes. Je m’adapte à votre vision pour créer une solution digitale qui dépasse vos attentes.</p>
            </div>
            <div class="service optimisationDiv grille4">
                <h3 id="optimisation"><i class="fa-solid fa-bullseye"></i> Optimisation de la Prise de Contact</h3>
                <p id="detailOptimisation" class="reveal">Faciliter la prise de contact avec vos clients est essentiel. J’intègre des fonctionnalités intuitives et efficaces pour encourager les interactions et les conversions, renforçant ainsi la croissance de votre entreprise.</p>
            </div>
        </div>
    </section>

    <section id="deroulement">
        <h2>Déroulement d'un projet</h2>
        <div class="etapes">
            <p class="h2">Étape 01</p>
            <p class="deroulementText">Un premier rendez-vous pour faire connaissance et élaborer le <span class="bold">cahier des charges</span>.Il s’agit de découvrir votre projet, lister vos besoins, détailler les fonctionnalités souhaitées, et vous faire des propositions innovantes. Cette étape est primordiale car elle permet de mettre au clair toutes les informations nécessaires pour la mise en route du projet. Suite à ce rendez-vous, un <span class="bold">devis</span> sera établi sur la base de nos échanges.</p>
        </div>
        <div class="etapes">
            <p class="h2">Étape 02</p>
            <p class="deroulementText">A cette étape, je vous réalise un <span class="bold">wireframe</span> qui représente la trame en noir et blanc de votre site Internet. Il vous aide à visualiser la structure de votre site, et l’organisation des différents composants à l’intérieur de celui-ci. Nous réalisons ensemble les éventuelles modifications, afin de finaliser le squelette de votre site.</p>
        </div>
        <div class="etapes">
            <p class="h2">Étape 03</p>
            <p class="deroulementText">Ensuite, je définis l'<span class="bold">identité visuelle</span> de votre site (charte graphique, nuancier de couleurs, typologies...) pour que celui-ci soit beau, pratique et intuitif. Nous obtenons ainsi une <span class="bold">maquette</span> couleurs avec laquelle vous pourrez intéragir. Celle-ci doit refléter l'identité de votre entreprise.</p>
        </div>
        <div class="etapes">
            <p class="h2">Étape 04</p>
            <div class="deroulementText">
                <p>Une fois la maquette validée, je passe à l’ <span class="bold">intégration</span>, c’est à dire le développement pur et à l'animation de votre projet à l’aide de différents langages (HTML, CSS, JavaScript).</p>
                <p>Si le projet le nécessite, je m’occupe du <span class="bold">développement des fonctionnalités</span> du site. Lors de cette étape, j’utilise des langages de programmation tels que PHP ou JavaScript, ainsi que mon framework de prédilection : Symfony.</p>
            </div>
        </div>
        <div class="etapes">
            <p class="h2">Étape 05</p>
            <p class="deroulementText">Une fois le projet finalisé, <span class="bold">je vous montre comment vous pourrez mettre à jour</span> le contenu de votre site en toute simplicité grâce à l'interface intuitive que je vous aurai créée, puis je vous remets les codes d’accès. Si vous le souhaitez, je peux m’occuper de sa mise en ligne.</p>
        </div>
        <div class="etapes">
            <p class="h2">Étape 06</p>
            <div class="deroulementText">
                <p>Félicitations !</p>
                <p>Vous êtes l'<span class="bold">unique propriétaire</span> de votre site. Libre à vous de me contacter, ou tout autre développeur/se le jour où vous voudrez modifier la structure, ou faire évoluer votre site.</p>
            </div>
        </div>
    </section>
    <?php require_once './partials/footer.php' ?>

</body>

</html>