<?php
require_once './header.php';
sql_connect();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="src/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <div class= "le_chemin">
        <nav class="chemin">
            <ol>
                <li class="chemin1"><a href="accueil.php">Accueil</a></li>
                <li class="chemin1"><a href="mentions-legales.php">Mentions légales</a></li>
            </ol>
        </nav>
    </div>

    <div class="logo_ML text-center">
        <img src="/src/images/LogoMemoriaBlack.svg" alt="Logo" width="499" height="117">
    </div>

    <div class="CGU">
        <div>
            <h1 class="h_ML"> Conditions Générales d'Utilisation du Blog Memoria :</h1>
        </div>
        <div class="container">
            <p class="p_ML"> En accédant et en utilisant
                le blog Memoria, vous acceptez les conditions
                générales d'utilisation énoncées ci-dessous.
                Si vous n'acceptez pas ces conditions, veuillez
                ne pas utiliser le site. <br>
            </p>
        </div>


        <div class="container">
            <h3 class="st_ML"> Objectif du Site : </h3>
            <p class="p_ML">Memoria a pour objectif de fournir
                une plateforme en ligne où les utilisateurs peuvent
                partager des articles, informations et expériences variées.</p>
        </div>


        <div class="container">
            <h3 class="st_ML"> Services Proposés : </h3>

            <p class="p_ML"> Les services offerts par Memoria incluent
                la publication d'articles, la création d'espaces personnels
                pour les utilisateurs, la possibilité de commenter et interagir
                avec les articles, ainsi que d'autres fonctionnalités liées au
                partage d'informations librement. </p>
        </div>


        <div class="container">
            <h3 class="st_ML">Droits de l'Utilisateur : </h3>

            <ol class="p_ML">
                <li>
                    <p>1. Identifiants de Connexion : L'utilisateur est responsable
                        du maintien de la confidentialité de ses identifiants
                        de connexion. Toute activité sur le site sous son compte
                        sera considérée comme effectuée par
                        l'utilisateur.
                    </p>
                </li>
                <br>
                <li>
                    <p>2. Utilisation Conforme : L'utilisateur s'engage à utiliser Memoria conformément
                        à son intention de partage d'informations variées.
                        Tout usage abusif ou contraire à l'éthique est strictement interdit. </p>
                </li>
                <br>
                <li>
                    <p>3. Bon Fonctionnement du Site : L'utilisateur ne doit pas
                        tenter de nuire au bon fonctionnement du site, y compris
                        la tentative d'accès non autorisé, la perturbation des services,
                        ou toute activité pouvant compromettre l'intégrité du site.</p>
                </li>
            </ol>

        </div>
    </div>


    <div class="container">
        <div>
            <h3 class="st_ML">Espace Adhérent (le cas échéant) : </h3>

            <p class="p_ML">En cas de création d'un espace adhérent, les conditions spécifiques à la création de compte,
                son rôle, les utilisations permises et interdites, ainsi que son fonctionnement,
                seront détaillées dans une section distincte.</p>
        </div>


        <div class="container">
            <h3 class="st_ML">Publication d'Informations : </h3>

            <p class="p_ML">Si l'utilisateur a la possibilité de poster des informations sur le site,
                il doit respecter les règles d'utilisation énoncées par Memoria,
                notamment en évitant la diffusion de contenu diffamatoire, obscène, ou en violation des droits d'autrui.
            </p>
        </div>


        <div class="container">
            <h3 class="st_ML">Responsabilité de l'Utilisateur : </h3>

            <p class="p_ML">L'utilisateur est tenu responsable de tout dommage résultant du non-respect des obligations
                énoncées dans
                les présentes
                conditions générales d'utilisation.</p>
        </div>


        <div class="container">
            <h3 class="st_ML"> Modification des CGU : </h3>

            <p class="p_ML">Memoria se réserve le droit de modifier ces conditions à tout moment.
                Les utilisateurs seront informés des changements via une notification sur le site.
                Il est de la responsabilité de l'utilisateur de consulter régulièrement les CGU mises à jour.
                En utilisant Memoria, vous acceptez pleinement et sans réserve les présentes conditions générales
                d'utilisation.
                Si vous avez des questions, veuillez nous contacter à memoria.support@gmail.com. </p>
            <p class="p_MAJ">Dernière mise à jour : 02/02/2024</p>
        </div>
    </div>



    <div class="ML">
        <div class="container">
            <h2 class="h_ML2"> Mentions Légales du Blog Memoria : </h2>
        </div>

        <div class="container">
            <h3 class="st_ML"> Éditeur du Site : </h3>
        </div>


        <div class="container">
            <p class="p_ML"> Nom de l'éditeur : <br>
                Memoria Adresse : 1 Rue Jacques Ellul, 33800 Bordeaux <br>
                Téléphone : 06 XX XX XX XX <br>
                E-mail : memoria.support@gmail.com </p>

            <h3 class="st_ML">Directeur de la publication : </h3>

            <p class="p_ML">L'équipe éditoriale de Memoria</p>

            <h3 class="st_ML">Hébergeur du Site : </h3>

            <p class="p_ML">Nom de l'hébergeur : XXX <br>
                Adresse : XXX <br>
                Téléphone : XXX <br>
                E-mail : XXX</p>
        </div>


        <div class="container">
            <h3 class="st_ML">Propriété Intellectuelle :</h3>

            <p class="p_ML">Le contenu du site Memoria (textes, images, vidéos, etc.) est la propriété exclusive de
                Memoria.
                Toute reproduction ou utilisation non autorisée est strictement interdite. </p>
        </div>


        <div class="container">
            <h3 class="st_ML">Protection des Données Personnelles : </h3>

            <p class="p_ML">Conformément à la législation en vigueur, les informations collectées sur le site Memoria
                font l'objet d'un traitement informatique. Les utilisateurs disposent d'un droit d'accès,
                de rectification et de suppression de leurs données. Pour exercer ces droits,
                veuillez nous contacter à memoria.support@gmail.com. </p>
        </div>


        <div class="container">
            <h3 class="st_ML">Cookies : </h3>

            <p class="p_ML">Le site Memoria utilise des cookies pour améliorer l'expérience utilisateur. En naviguant
                sur le site,
                vous consentez à l'utilisation de ces cookies. </p>
        </div>


        <div class="container">
            <h3 class="st_ML"> Liens Hypertextes : </h3>

            <p class="p_ML">Le site Memoria peut contenir des liens vers des sites tiers. Nous déclinons toute
                responsabilité
                quant au contenu de ces sites.</p>
        </div>


        <div class="container">
            <h3 class="st_ML">Responsabilité : </h3>

            <p class="p_ML">Nous nous efforçons de fournir des informations exactes et à jour sur le site Memoria.
                Cependant, nous ne pouvons garantir l'exactitude et l'exhaustivité de ces informations.
                Nous déclinons toute responsabilité en cas d'utilisation du contenu du site.
            <p>
        </div>


        <div class="container">
            <h3 class="st_ML">Droit Applicable : </h3>

            <p class="p_ML">Les présentes mentions légales sont régies par le droit applicable français.</p>
        </div>


        <div class="container">
            <div>
                <h3 class="st_ML">Modification des Mentions Légales : </h3>
                <p class="p_ML">Nous nous réservons le droit de modifier les présentes mentions légales à tout moment.
                    Les utilisateurs seront informés des changements via une notification sur le site.
                    Il est de la responsabilité des utilisateurs de consulter régulièrement les mentions
                    légales mises à jour. </p>
            </div>

            <div>
                <h3 class="st_ML"> Contact :</h3>
                <p class="p_ML">Pour plus d'informations retrouvez nous <a href="contact.php">ici. </a> </p>
            </div>
            <div>
                <p class="p_MAJ">Dernière mise à jour : 02/02/2024</p>
            </div>
        </div>
    </div>

</body>

</html>


<?php require_once "footer.php" ?>