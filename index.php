<?php
$logos = $_GET['logos'];
switch ($logos) {
    case 1:
        $definition = "<h1>HTML</h1>
        <img src=\"images/html logo.jpg\" class=\"imgLogo\" alt=\"logo HTML\">
        <p>Le HTML ou Hypertext Mark-up Language consiste en un langage informatique universel. Il a été créé en 1989 par Tim Berners Lee, un informaticien. Il se base sur le SGM (Standard Generalized Markup Language), un langage universel qui utilise de nombreuses balises. 
            Aujourd'hui, le langage HTML en est à sa cinquième version, le HTML 5. Il fait partie des trois principales inventions du World Wide Web avec le protocole HTTP ou les URL. Toute page html s'ouvre avec la balise « html » et se referme avec la balise « /html ». 
            Le langage HTML a apporté une véritable révolution sur Internet en simplifiant le langage SGM (Standard Generalized Markup). Basé sur un système de blocs, il permet d'agencer les informations, de les embellir et de les classer afin que la navigation soit fluide et pertinente pour chaque internaute.
            Le HTML peut être consulté et décodé via différents supports dont les ordinateurs, tablettes, montres connectées et téléphones portables font partie.
        </p>
        <p><h2>À quoi sert HTML ?</h2>
            Le HTML permet d'afficher une page web à l'écran, c'est lui qui contient toutes les informations utiles afin que l'ordinateur puisse afficher une page web. Par exemple, il contiendra le titre de la page, le texte, ou les images et liens. 
            Il renverra aussi souvent vers une feuille de style CSS (Cascading Style Sheets, ou feuilles de style en cascade, en français) qui sert à définir le style de la page, l'apparence des éléments indépendamment du contenu brut. On peut définir des légendes pour les images, mais aussi des animations au survol de la souris grâce à lui. 
            C'est aussi lui qui garantit l'accessibilité d'une page aux malvoyants par exemple grâce à la description textuelle des images à travers l'attribut « alt ». Il permet l'affichage de vidéos à l'écran, l'affichage et l'interactivité de forums, sites web et plateformes.
            Il est indispensable sur Internet. Le HTML peut permettre de mettre des informations en avant, de structurer le contenu, d'écrire de l'hypertexte ou encore de créer des formulaires. Il permet entre autres de choisir les polices de texte et leur format, de créer des menus de navigation et de créer des liens renvoyant vers d'autres pages.
        </p>
        <p><h2>Comment fonctionne le HTML ?</h2>
        Le HTML fonctionne avec un ensemble de balises. La plupart des balises ont besoin d'être ouvertes puis fermées pour fonctionner grâce à des icônes chevrons : < et > et une barre oblique : / appelée slash en anglais. 
        Les balises contiennent toujours le nom de l'élément et son attribut. Parfois les attributs sont rangés dans des feuilles CSS pour simplifier la lecture par le navigateur et accélérer l'affichage. 
        Le HTML donne au navigateur le protocole de décodage à utiliser, comme l'UTF 8 et le Doctype pour afficher correctement la page. 
        C'est un langage codé que l'ordinateur est capable de décoder afin qu'il soit visible et intelligible par tous.

        Une page en HTML comporte généralement une partie titre, une partie (head) d'en-tête ainsi qu'une partie corps (body) la plus importante partie de la page. 
        Si on ne souhaite pas utiliser de feuille de style CSS, il est possible de personnaliser les éléments de la page directement sur le HTML en utilisant des éléments comme « style » ou « background-color » notamment.
        </p>";
        break;

    case 2:
        $definition = "<h1>CSS</h1>
        <img src=\"images/css3 logo.jpg\" class=\"imgLogo\" alt=\"logo HTML\">
        <p>Les feuilles de styles (en anglais \"Cascading Style Sheets\", abrégé CSS) sont un langage qui permet de gérer la présentation d'une page Web. Le langage CSS est une recommandation du World Wide Web Consortium (W3C), au même titre que HTML ou XML.
        Les styles permettent de définir des règles appliquées à un ou plusieurs documents HTML. Ces règles portent sur le positionnement des éléments, l'alignement, les polices de caractères, les couleurs, les marges et espacements, les bordures, les images de fond, etc.
        Le but de CSS est séparer la structure d'un document HTML et sa présentation. En effet, avec HTML, on peut définir à la fois la structure (le contenu et la hiérarchie entre les différentes parties d'un document) et la présentation. Mais cela pose quelques problèmes. Avec le couple HTML/CSS, on peut créer des pages web où la structure du document se trouve dans le fichier HTML tandis que la présentation se situe dans un fichier CSS.</p>

        Avec CSS on peut par exemple définir un ensemble de règles stylistiques communes à toutes les pages d'un site internet. Cela facilite ainsi la modification de la présentation d'un site entier. CSS permet aussi de définir des règles différentes pour chaque support d'affichage (une navigateur classique, une télévision, un support mobile, un lecteur braille...). CSS permet aussi d'améliorer l'accessibilité des documents web.
        De plus, CSS ajoute des fonctionnalités nouvelles par rapport à HTML au point de vue du style. En effet, HTML permet une gestion assez sommaire du style des documents.
        Voici un exemple de règle CSS : p  font-color: red; font-size: 12pt
        Explications : cette règle définit la couleur et la taille du texte pour les éléments p (paragraphes) d'un document HTML. Ainsi, tous les paragraphes auront une police de couleur rouge et une taille de 12 points.

        <h2>Le CSS c'est quoi ? </h2>
        Même si d'autres langages peuvent être utilisés, on trouve principalement 4 langages qui donnent au web d'aujourd'hui sa forme: HTML, CSS, Javascript et PHP. HTML et CSS sont des langages descriptifs, Javascript et PHP sont des langages de programmation.
        HTML et CSS servent à décrire comment une page web est présentée. HTML est le cœur du web, son ossature. Il structure les différents éléments d'une page web. CSS permet de formater ces éléments, de leur donner un style visuel.

        CSS est l'abréviation de Cascading Style Sheets qui signifie feuilles de style en cascade. Le mot cascade rappelle ici que les styles peuvent être classés selon différents degrés d'importance. CSS permet donc de contrôler de manière précise comment un site web est présenté. 
        Les feuilles de style CSS, comment ça marche ? 
        Tout comme HTML, CSS est un langage facile à prendre en main. Le style d'un document web peut être implémenté directement dans le code HTML ou inséré dans un document différent. 

        <h2>Dans la ligne</h2>
        Il est possible d'appliquer du CSS directement dans la balise HTML d'un élément avec l'attribut style. 
        Exemple : -p style=\"background-color: #FFFFFF; »-Mon texte-/p-. Cet exemple applique un arrière-plan blanc au paragraphe \"Mon texte\". 

        <h2>En interne</h2>
        Plutôt que de mettre un peu de CSS dans chaque balise HTML, il est possible de le réunir dans une balise -style- à l'intérieur de la balise -head- en début de document HTML. 
        Exemple :  -style type=\"text/css\"-p {background-color: #FFFFFF;-/style-. Ceci s'applique alors à tous les paragraphes du document.

        <h2>La feuille de style en externe</h2>
        À cause notamment de la taille des sites web aujourd'hui et des très nombreux styles qui peuvent apparaître, ces 2 types d'implémentation ne sont plus vraiment utilisés. En effet le style d'un site web peut contenir des centaines voire des milliers de lignes de code. 
        La feuille de style est la manière recommandée de formater un document HTML. On crée tout un document dédié au style et écrit en CSS, souvent appelé style.css. Il se présente ainsi :
        Sélecteur {propriété: valeur; propriété: valeur; propriété: valeur;}
        Sélecteur {propriété: valeur;}
        Sélecteur {propriété: valeur; propriété: valeur;}
        Le sélecteur est le type d'élément sur laquelle on va appliquer un style (les balises de titre et de paragraphe par exemple). La propriété est ce qui va être modifié : l'arrière-plan, une police, la largeur d'un élément. 
        En reprenant le même exemple que précédemment on a :
        p {
        background-color: #FFFFFF;
        }
        Le style est ensuite appliqué grâce un lien à l'intérieur de la balise -head- du document HTML. Un seul site internet peut contenir plusieurs feuilles de style si nécessaire et une seule feuille de style peut s'appliquer sur plusieurs pages. C'est la méthode la plus efficace. 
        <H2>À quoi sert le CSS ? </H2>
        Le CSS permet donc de définir l'esthétique d'un site web. Sans CSS, une page web ne serait qu'une succession d'éléments noirs sur fond blanc les uns à la suite des autres. 
        C'est avec du code CSS que l'on définit par exemple :
        la police d'un texte et son aspect (couleur, taille, etc.);
        les marges et le rembourrage (padding) entourant un élément;
        l'apparence d'un menu;
        la création d'éléments géométriques;
        la mise en place de grilles d'images;
        l'ajout de bordure;
        l'application de différents effets ou animations simples;
        le changement de présentation d'un site selon l'appareil utilisé par l'utilisateur (téléphone portable, ordinateur, tablette);
        la manière dont on navigue dans un site internet. ";
        break;
    case 3:
        $definition = "<h1>PHP</h1>
        <img src=\"images/php logo.jpg\" class=\"imgLogo\" alt=\"logo HTML\">
        PHP est un langage de programmation côté serveur à code source ouvert que de nombreux développeurs utilisent pour le développement Web. C'est également un langage polyvalent que vous pouvez utiliser pour réaliser de nombreux projets, notamment des interfaces graphiques (GUI).

        <H2>Que signifie PHP ?</H2>
        L'abréviation PHP signifiait initialement Personal Homepage (page d'accueil personnelle), mais c'est maintenant un acronyme récursif pour Hypertext Preprocessor. La première version de PHP a été lancée il y a 26 ans. On en est maintenant à la version 8, sortie en novembre 2020, mais la version 7 reste la plus utilisée.
        PHP fonctionne sur le moteur Zend, qui est l'implémentation la plus populaire. Il en existe également d'autres, comme parrot, HPVM (Hip Hop Virtual Machine) et Hip Hop créé par Facebook. PHP est surtout utilisé pour créer des serveurs Web. Il fonctionne sur le navigateur et l'est également capable en ligne de commande. Ainsi, si vous n'avez pas envie d'afficher la sortie de votre code dans le navigateur, vous pouvez l'afficher dans le terminal.
        
        <H2>À quoi sert PHP ?</H2>
        PHP a deux applications principales :
        La programmation de scripts côté serveur. PHP est bien adapté au développement de sites et d'applications Web dynamiques.
        Les scripts en ligne de commande. Comme avec Python et Perl, vous pouvez exécuter des scripts PHP à partir de la ligne de commande pour effectuer des tâches redondantes comme l'envoi d'e-mails et la génération de fichiers PDF.
        <H2>Les avantages de PHP</H2>
        PHP possède de nombreux atouts qui expliquent sa popularité et ses parts de marché importantes:
        <ul>
            <li>Multiplateforme : PHP est indépendant de la plateforme. Vous n'avez pas besoin d'avoir un système d'exploitation particulier pour l'utiliser car il fonctionne sur toutes les plateformes, qu'il s'agisse de Mac, Windows ou Linux.</li>
            <li>Open Source : PHP est un logiciel libre. Le code original est mis à la disposition de tous ceux qui souhaitent l'utiliser. C'est l'une des raisons pour lesquelles l'un de ses frameworks, Laravel, est si populaire.</li>
            <li>Facile à apprendre : PHP n'est pas difficile à apprendre pour les débutants. Vous pouvez le prendre en main encore plus vite si vous avez déjà des connaissances en programmation.</li>
            <li>Compatibilité avec les bases de données : vous pouvez facilement connecter PHP à toutes les bases de données, relationnelles et non relationnelles. Il peut donc se connecter en un rien de temps à MySQL, Postgress, MongoDB ou toute autre base de données.</li>
            <li>Communauté : PHP dispose d'une communauté en ligne très solidaire. La documentation officielle fournit des guides sur la façon d'utiliser les fonctionnalités et vous pouvez facilement résoudre votre problème si vous êtes bloqué.</li>
        </ul>";
        break;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML CSS PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="container">
        <header>HTML - CSS - PHP</header>
        <nav>
            <div class="navCode">
                <a href="?logos=1">
                    <img src="images/html logo.jpg" class="logo" alt="logo HTML" />
                </a>
                <h2>HTML</h2>
            </div>
            <div class="navCode">
                <a href="?logos=2">
                    <img src="images/css3 logo.jpg" class="logo" alt="logo CSS" />
                </a>
                <h2>CSS</h2>
            </div>
            <div class="navCode">
                <a href="?logos=3">
                    <img src="images/php logo.jpg" class="logo" alt="logo PHP" />
                </a>
                <h2>PHP</h2>
            </div>
        </nav>
        <article>
            <?= $definition; ?>
        </article>
        <footer>Entraînement - developpement - Lynda D</footer>
    </div>
</body>

</html>