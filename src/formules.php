<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6HGCQNJ');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="./assets/img/favicon/favicon-16x16.png">

    <title>Formules - Amand'Innov Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link href="./assets/css/cards.css" rel="stylesheet">
    <link href="./assets/css/formules.css" rel="stylesheet">

    <script src="./assets/js/menu.js" defer></script>
    <script src="./assets/js/modaleContact.js" defer></script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6HGCQNJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php require_once './partials/header.php' ?>
    <?php require_once './partials/contact/contactFonctions.php' ?>

    <section class="entete">
        <h1>Les formules proposées</h1>
        <p>Chaque formule peut être adaptée selon vos besoins, n'hésitez pas à me contacter pour un devis personnalisé et gratuit.</p>
    </section>
    <section class="cards">
    <?php
        //
        // Formule Essentiel
        //
        ?>
        <div class="card">
            <div class="cardHeader">
                <p class="cardHeaderText">à partir de</p>
                <p class="cardHeaderPrix">695 €</p>
                <h2>Formule Essentiel</h2>
            </div>
            <ul class="cardList">
                <li><i class="fa-solid fa-circle-check"></i> Site vitrine page unique</li>
                <li><i class="fa-solid fa-circle-check"></i> Site adapté tous écrans</li>
                <li><i class="fa-solid fa-circle-check"></i> Formulaire de contact</li>
                <li><i class="fa-solid fa-circle-check"></i> 1 module standard inclus</li>
                <li><i class="fa-solid fa-circle-check"></i> Mentions légales</li>
                <li><i class="fa-solid fa-circle-check"></i> Maquette et charte graphique</li>
                <li><i class="fa-solid fa-circle-check"></i> Mise en ligne du site</li>
                <li><i class="fa-solid fa-circle-check"></i> Formation à l'utilisation du site</li>
            </ul>
           <button class="contact btnAdd modal-trigger modal-btn"><span>Demander un devis</span></button>
        </div>
        <?php
        //
        // Formule Site Vitrine
        //
        ?>
        <div class="card">
            <div class="cardHeader">
                <p class="cardHeaderText">à partir de</p>
                <p class="cardHeaderPrix">1190 €</p>
                <h2>Formule Site Vitrine</h2>
            </div>
            <ul class="cardList">
                <li><span class="green"><i class="fa-solid fa-circle-check"></i></span> Site vitrine multi-pages</li>
                <li><i class="fa-solid fa-circle-check"></i> Site adapté tous écrans</li>
                <li><i class="fa-solid fa-circle-check"></i> Page d'accueil</li>
                <li><span class="green"><i class="fa-solid fa-circle-check"></i></span> Pages complémentaires développées sur-mesure</li>
                <li><i class="fa-solid fa-circle-check"></i> Formulaire de contact</li>
                <li><i class="fa-solid fa-circle-check"></i> 1 module standard inclus</li>
                <li><i class="fa-solid fa-circle-check"></i> Mentions légales</li>
                <li><span class="green"><i class="fa-solid fa-circle-check"></i></span> Interface Administrateur sur-mesure</li>
                <li><i class="fa-solid fa-circle-check"></i> Maquette et charte graphique</li>
                <li><i class="fa-solid fa-circle-check"></i> Mise en ligne du site</li>
                <li><i class="fa-solid fa-circle-check"></i> Formation à l'utilisation du site</li>
                <li><span class="green"><i class="fa-solid fa-circle-check"></i></span> Formation à l'utilisation de l'interface Administrateur</li>
            </ul>
            <button class="borderGreen contact btnAdd modal-trigger modal-btn" ><span>Demander un devis</span></button>
        </div>
        <?php
        //
        // Modification
        //
        ?>
        <div class="card">
            <div class="cardHeader">
                <p class="cardHeaderText">à partir de</p>
                <p class="cardHeaderPrix">30 €/h</p>
                <h2>Travaux divers <sup>*</sup></h2>
            </div>
            <ul class="cardList">
                <li><i class="fa-solid fa-circle-check"></i> Modification de pages existantes</li>
                <li><i class="fa-solid fa-circle-check"></i> Réalisation de travaux divers (HTML / CSS / PHP / JavaScript)</li>
                <br>
                <li class="exposant"><sup class="exposant">*</sup> Réalisation de modifications et/ou travaux divers après établissement d'un devis gratuit au préalable.</li>
            </ul>

            <div>
         <p></p>
         
           <button class="contact btnAdd modal-trigger modal-btn"><span>Demander un devis</span></button>
        </div></div>
    </section>
    <?php require_once './partials/footer.php' ?>
<script>
        window.axeptioSettings = {
            clientId: "666a9dbab7a0a9ce6ae45182",
            cookiesVersion: "amandinnov-fr-EU",
            googleConsentMode: {
                default: {
                    analytics_storage: "denied",
                    ad_storage: "denied",
                    ad_user_data: "denied",
                    ad_personalization: "denied",
                    wait_for_update: 500
                }
            }
        };

        (function(d, s) {
            var t = d.getElementsByTagName(s)[0],
                e = d.createElement(s);
            e.async = true;
            e.src = "//static.axept.io/sdk.js";
            t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>
</body>

</html>
