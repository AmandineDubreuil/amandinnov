<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="./assets/img/favicon/favicon-16x16.png">

    <title>Réalisations - Amand'Innov</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/cards.css" rel="stylesheet">
    <link href="./assets/css/realisations.css" rel="stylesheet">


    <script src="./assets/js/menu.js" defer></script>
    <script src="./assets/js/modaleContact.js" defer></script>

</head>

<body>
    <?php require_once './partials/header.php' ?>
    <?php require_once './partials/contact/contactFonctions.php' ?>

    <section class="entete">
        <h1>Réalisations</h1>
    </section>
    <section class="cards">
        <div class="card">
            <a href="https://www.epiveto.fr/" target="blank">
                <div class="cardHeader">
                    <img src="./assets/img/epiveto.png" alt="site epiveto.fr">

                </div>
                <div class="cardBody">
                <div class="cardBodyTitre">
                        <h2>Épi-Véto</h2>
                        <p class="tag">Site vitrine</p>
                    </div>
                    <p>Site vitrine d'une clinique vétérinaire</p>
                    <ul class="cardList">
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> 6 pages</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Site adapté tous écrans</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Widget reprenant les informations suivantes :
                            <ul>
                                <li>Formulaire de contact</li>
                                <li>Carte OpenStreetMap</li>
                                <li>Horaires d'ouvertures</li>
                                <li>Réassurance</li>
                            </ul>
                        </li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Bandeau défilant</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Liens vers les réseaux sociaux</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Liens vers différents sites pertinents</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Interface administrateur pour gérer :
                            <ul>
                                <li>Le bandeau défilant</li>
                                <li>Les images du carrousel</li>
                                <li>Les honoraires</li>
                                <li>L'équipe</li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="https://www.amiam.fr/" target="blank">
                <div class="cardHeader">
                    <img src="./assets/img/amiam.jpg" alt="site amiam.fr">

                </div>
                <div class="cardBody">
                <div class="cardBodyTitre">
                        <h2>Amiam</h2>
                        <p class="tag">Site dynamique</p>
                    </div>
                    <p>Site dynamique de gestion de repas entre amis</p>
                    <ul class="cardList">
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Page d'accueil</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Site adapté tous écrans</li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Formulaire de contact
                        </li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Interface utilisateur :
                            <ul>
                                <li>Compte sécurisé</li>
                                <li>Gestion de son profil</li>
                                <li>Gestion de ses repas</li>
                                <li>Gestion de ses recettes</li>
                                <li>Gestion de ses amis</li>

                            </ul>
                        </li>
                        <li><span class="check"><img src="./assets/img/check-primary-light.png" alt="checked"></span> Interface administrateur :
                            <ul>
                                <li>Compte sécurisé</li>
                                <li>Chemin d'accès protégé</li>
                                <li>Gestion des comptes utilisateurs</li>
                                <li>Gestion des ingrédients</li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </a>
        </div>

    </section>
    <?php require_once './partials/footer.php' ?>

</body>

</html>