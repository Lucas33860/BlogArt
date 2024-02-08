<?php
require_once 'header.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);
sql_connect(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/css/mentions_legales_lena.css" rel="stylesheet" />
</head>

<style>
body{
    margin-left: 2%;
}
@font-face{
    font-family: "Futura-Bold";
    src: url(/src/fonts/futura/Futura-Bold-03.woff2);
}
@font-face{
    font-family: "Futura-Medium";
    src: url(/src/fonts/futura/Futura-Medium-01.woff2);
}
h1{
    font-family: "Futura-Bold", sans-serif !important;
    margin-top: 4%;
    margin-bottom: 20px;
}

h2{
    font-family: "Futura-Medium",sans-serif !important;
    margin-top: 20px;
    margin-bottom: 10px;
}

h3{
    font-family: "Futura-Medium",sans-serif !important;
    margin-top: 25px;
    margin-bottom: 10px;

}

p{
    font-family: "Inter", sans-serif !important;
    line-height:normal
}

</style>

<body>

    <div class="titre">
        <h1> Conditions Générales d'Utilisation du Blog Memoria :</h1>
        <p> En accédant et en utilisant le blog Memoria, vous acceptez les conditions générales d'utilisation énoncées ci-dessous.<br />
            Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser le site. <br />
    </div>
    <div class="titre">
        <h3> Objectif du Site : </h3> <br />

        <p>Memoria a pour objectif de fournir une plateforme en ligne où les utilisateurs peuvent partager des articles, <br />
            informations et expériences variées.</p> </br>
    </div>

    <div class="titre">
        <h3>Services Proposés : </h3> <br />

        <p>Les services offerts par Memoria incluent la publication d'articles, la création d'espaces personnels pour les utilisateurs,
            la possibilité de commenter et interagir avec les articles, ainsi que d'autres fonctionnalités liées au partage d'informations librement. </p> <br />
    </div>

    <div class="titre">
        <h3>Droits de l'Utilisateur : </h3> <br />

        <h3> Identifiants de Connexion : </h3> <br />
        <p>L'utilisateur est responsable du maintien de la confidentialité de ses identifiants de connexion. <br />
            Toute activité sur le site sous son compte sera considérée comme effectuée par l'utilisateur. </p>
        <h3> Utilisation Conforme : </h3> <br />
        <p> L'utilisateur s'engage à utiliser Memoria conformément à son intention de partage d'informations variées. Tout usage abusif ou contraire à l'éthique est strictement interdit. </p> <br />
        <h3>Bon Fonctionnement du Site : </h3> <br />
        <p>L'utilisateur ne doit pas tenter de nuire au bon fonctionnement du site, y compris la tentative d'accès non autorisé, la perturbation des services,
            ou toute activité pouvant compromettre l'intégrité du site.</p> <br />
    </div>
    </div>

    <div class="titre">
        <div>
            <h3>Espace Adhérent (le cas échéant) : </h3> <br />

            <p>En cas de création d'un espace adhérent, les conditions spécifiques à la création de compte,
                son rôle, les utilisations permises et interdites, ainsi que son fonctionnement,
                seront détaillées dans une section distincte.</p> <br />
        </div>

        <div class="titre">
            <h3>Publication d'Informations : </h3> <br />

            <p>Si l'utilisateur a la possibilité de poster des informations sur le site,
                il doit respecter les règles d'utilisation énoncées par Memoria,
                notamment en évitant la diffusion de contenu diffamatoire, obscène, ou en violation des droits d'autrui.</p> <br />
        </div>

        <div class="titre">
            <h3>Responsabilité de l'Utilisateur : </h3>

            <p>L'utilisateur est tenu responsable de tout dommage résultant du non-respect des obligations énoncées dans les présentes
                conditions générales d'utilisation.</p> <br />
        </div>

        <div class="titre">
            <h3> Modification des CGU : </h3> <br />

            <p>Memoria se réserve le droit de modifier ces conditions à tout moment.
                Les utilisateurs seront informés des changements via une notification sur le site.
                Il est de la responsabilité de l'utilisateur de consulter régulièrement les CGU mises à jour.
                En utilisant Memoria, vous acceptez pleinement et sans réserve les présentes conditions générales d'utilisation.
                Si vous avez des questions, veuillez nous contacter à memoria.support@gmail.com. </p>
            </br:>

            <p>Dernière mise à jour : 02/02/2024</p> <br />
        </div>

        <div class="titre">
            <h1> Mentions Légales - Blog Memoria : </h1> <br />

            <h3> Éditeur du Site : </h3> <br />
        </div>

        <div class="titre">
            <p> Nom de l'éditeur : <br />
                Memoria Adresse : 1 Rue Jacques Ellul, 33800 Bordeaux <br />
                Téléphone : 06 XX XX XX XX <br />
                E-mail : memoria.support@gmail.com </p>

            <h3>Directeur de la publication : </h3> <br />

            <p>L'équipe éditoriale de Memoria</p> <br />

            <h3>Hébergeur du Site : </h3> <br />

            <p>Nom de l'hébergeur : XXX <br />
                Adresse : XXX <br />
                Téléphone : XXX <br />
                E-mail : XXX</p> <br />
        </div>

        <div class="titre">
            <h3>Propriété Intellectuelle :</h3> <br />

            <p>Le contenu du site Memoria (textes, images, vidéos, etc.) est la propriété exclusive de Memoria. <br />
                Toute reproduction ou utilisation non autorisée est strictement interdite. </p> <br />
        </div>

        <div class="titre">
            <h3>Protection des Données Personnelles : </h3> <br />

            <p>Conformément à la législation en vigueur, les informations collectées sur le site Memoria
                font l'objet d'un traitement informatique. Les utilisateurs disposent d'un droit d'accès,
                de rectification et de suppression de leurs données. Pour exercer ces droits,
                veuillez nous contacter à memoria.support@gmail.com. </p> <br />
        </div>

        <div class="titre">
            <h3>Cookies : </h3> <br />

            <p>Le site Memoria utilise des cookies pour améliorer l'expérience utilisateur. En naviguant sur le site,
                vous consentez à l'utilisation de ces cookies. </p>
        </div>

        <div class="titre">
            <h3> Liens Hypertextes : </h3>

            <p>Le site Memoria peut contenir des liens vers des sites tiers. Nous déclinons toute responsabilité
                quant au contenu de ces sites.</p> <br />
        </div>

        <div class="titre">
            <h3>Responsabilité : </h3> <br />

            <p>Nous nous efforçons de fournir des informations exactes et à jour sur le site Memoria.
                Cependant, nous ne pouvons garantir l'exactitude et l'exhaustivité de ces informations.
                Nous déclinons toute responsabilité en cas d'utilisation du contenu du site.
            <p> <br />
        </div>

        <div class="titre">
            <h3>Droit Applicable : </h3> <br />

            <p>Les présentes mentions légales sont régies par le droit applicable français.</p> <br />
        </div>

        <div class="titre">
            <h3>Modification des Mentions Légales : </h3> <br />

            <p>Nous nous réservons le droit de modifier les présentes mentions légales à tout moment.
                Les utilisateurs seront informés des changements via une notification sur le site.
                Il est de la responsabilité des utilisateurs de consulter régulièrement les mentions
                légales mises à jour. </p> <br />

            <h3>Contact : </h3> <br />

            <p>Pour toute question ou demande, veuillez nous contacter à l'adresse e-mail suivante :
                <a href="memoria.support@gmail.com"> <br />

                    Dernière mise à jour : 02/02/2024
            </p> <br />
        </div>

</body>

</html>
<?php require_once 'footer.php'; ?>