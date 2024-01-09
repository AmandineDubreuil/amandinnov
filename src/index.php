<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amand'Innov</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/css/output.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/index.css" rel="stylesheet">

    <script src="./assets/js/menu.js" defer></script>
    <script src="./assets/js/showHide.js" defer></script>
    <script src="./assets/js/intersect.js" defer></script>

</head>

<body>
    <?php require_once './partials/header.php' ?>

    <section class="entete">
        <div class="cadre"></div>
        <div class="text-entete">
            <h1>Je conçois et développe <span>votre site Internet</span></h1>
            <p class="text-secondary">Du design à l'hébergement, je donne vie à la présence en ligne de votre entreprise, de manière unique et sur-mesure.</p>

        </div>
        <div class="fleche bounce"><a href="#services" class=""><i class="fa-solid fa-circle-chevron-down"></i></a></div>
    </section>
    <section id="services" class="">
        <h2>Les services proposés :</h2>
        <div class="grille ">
            <div class="service conceptionDiv grille6">
                <h3 id="conception" ><i class="fa-regular fa-pen-to-square"></i> Conception sur Mesure</h3>
                <p id="detailConception" class="reveal">Je crois en la singularité de chaque entreprise. C’est pourquoi je crée des sites Internet entièrement sur-mesure, reflétant l’identité de votre marque, et répondant à vos objectifs commerciaux uniques.</p>
            </div>
            <div class="service utilisateurDiv intersectright grille6">
                <h3 id="utilisateur" ><i class="fa-solid fa-users"></i> Comportements Utilisateur</h3>
                <p id="detailUtilisateur" class="reveal">Je mets l’Utilisateur au coeur du processus de conception. En analysant les comportements des utilisateurs, je conçois des interfaces conviviales qui maximisent l’engagement et améliorent l’expérience utilisateur.</p>
            </div>
            <div class="service designDiv grille3">
                <h3 id="design"><i class="fa-solid fa-display"></i> Responsive Design</h3>
                <p id="detailDesign" class="reveal">Les temps ont changé, et votre site doit s’adapter. Tous nos sites internet sont conçus avec une approche “responsive”, garantissant une expérience fluide et attrayante, quel que soit le dispositif utilisé par vos visiteurs</p>
            </div>
            <div class="grille6 sm-hidden">
                <img src="./assets/img/responsive.jpg" alt="responsive">
            </div>
            <div class="service ecouteDiv intersectright grille3">
                <h3 id="ecoute" ><i class="fa-solid fa-microphone"></i> Écoute et Adaptabilité</h3>
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
        <div class="">
            <p class="h2">01</p>
            <p class="deroulementText">Un premier rendez-vous pour faire connaissance et élaborer le <span class="bold">cahier des charges</span>.Il s’agit de définir votre projet, lister vos besoins, détailler les fonctionnalités souhaitées. Cette étape est primordiale car elle permet de mettre au clair toutes les informations nécessaires pour la mise en route du projet. Suite à ce rendez-vous , un <span class="bold">devis</span> sera établi sur la base de nos échanges.</p>
        </div>
        <div>
            <p class="h2">02</p>
            <p class="deroulementText">A cette étape, je vous réalise un <span class="bold">wireframe</span> qui représente la trame en noir et blanc de votre site Internet. Il vous aide à visualiser la structure de votre site, et l’organisation des différents composants à l’intérieur de celui-ci.</p>
        </div>
        <div>
            <p class="h2">03</p>
            <p class="deroulementText">Ensuite, je définis la <span class="bold">charte graphique</span> (couleurs, typologies...) et crée une <span class="bold">maquette</span> en couleurs de votre site, avec laquelle vous pourrez intéragir. </p>
        </div>
        <div>
            <p class="h2">04</p>
            <p class="deroulementText">Une fois la maquette validée, je passe à l’ <span class="bold">intégration</span>, c’est à dire le développement pur de votre projet à l’aide des langages HTML et CSS, et son animation grâce à JavaScript.</p>
        </div>
        <div>
            <p class="h2">05</p>
            <p class="deroulementText">Si le projet le nécessite, je m’occupe du <span class="bold">développement des fonctionnalités</span> du site. Lors de cette étape, j’utilise des langages de programmation tels que PHP ou JavaScript, ainsi que mon framework de prédilection : Symfony.</p>
        </div>
        <div>
            <p class="h2">06</p>
            <p class="deroulementText">Une fois le projet finalisé, je vous <span class="bold">forme à l’utilisation de l’interface d’administration</span> et je vous remets les codes d’accès. Si vous le souhaitez, je peux m’occuper de sa mise en ligne. <span class="bold">Votre projet vous appartient</span>, vous êtes libre de choisir votre hébergeur, ainsi que le professionnel que vous désirez pour son évolution future.</p>
        </div>
    </section>
</body>

</html>