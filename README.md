# Description du Projet StatsGite
Le projet StrasGite est une plateforme dynamique créée en PHP. Son objectif est de fournir une plateforme permettant de réserver des chambres d'hôtes. Le site est développé selon le modèle MVC et intègre une base de données pour enregistrer les réservations. De plus, il dispose d'un Back-Office qui permet à l'administrateur d'ajouter, de modifier et de supprimer des chambres.

## Développement du site.

Il s'agit du deuxième projet de formation créé au sein de la Wild Code School après deux mois de formation. Ce travail collaboratif a été réalisé par 3 personnes dans le but de mettre en pratique les connaissances acquises en développement back-end, principalement en PHP.

## Critères imposés

#### Plusieurs critères ont été imposés pour le projet :

* Durée de réalisation : 5 semaines.
* 100% responsive.
* Utilisation de la méthode simple MVC.
* Utilisation de la méthode agile.
* Base de données : modèle logique des données (MLD) avec utilisation de MySQL. Réalisation d'un CRUD (Create, Read, Update, Delete).
* GIT / GIT HUB.

### Techonologies utilisées

Les technologies utilisées sont :

* HTML
* CSS
* TWIG
* PHP 8.0
* MySQL
* Composer
* PHPMailer
* GIT

## Travail personel

Pour ce projet, j'ai principalement travaillé sur :
* la page de présentations des chambres
* la page contact
* le Navbar et le Footer de chaque page
* l'envoi des mails après avoir confirmé la reservation

<a href="https://ibb.co/mXrD6DP"><img src="https://i.ibb.co/Gtfxcxr/Capture-d-cran-du-2023-06-01-22-59-43.png" alt="Capture-d-cran-du-2023-06-01-22-59-43" border="0"></a>

<a href="https://ibb.co/vsrvYWJ"><img src="https://i.ibb.co/3f8Yzb0/Capture-d-cran-du-2023-06-01-22-58-24.png" alt="Capture-d-cran-du-2023-06-01-22-58-24" border="0"></a>

### Quelques images du site.

<a href="https://ibb.co/SrZqQpF"><img src="https://i.ibb.co/hfTpXv3/Capture-d-cran-du-2023-06-01-23-02-48.png" alt="Capture-d-cran-du-2023-06-01-23-02-48" border="0"></a>

<a href="https://ibb.co/CWfDxdH"><img src="https://i.ibb.co/3knQtXC/Capture-d-cran-du-2023-06-01-23-07-43.png" alt="Capture-d-cran-du-2023-06-01-23-07-43" border="0"></a>

<a href="https://ibb.co/Qn2sHN4"><img src="https://i.ibb.co/S0hqmnz/Capture-d-cran-du-2023-06-01-23-01-18.png" alt="Capture-d-cran-du-2023-06-01-23-01-18" border="0"></a>

<a href="https://ibb.co/7pDDvZW"><img src="https://i.ibb.co/VCGGVzS/Capture-d-cran-du-2023-06-01-23-08-42.png" alt="Capture-d-cran-du-2023-06-01-23-08-42" border="0"></a>

### Les étapes pour visualiser le projet

#### Pour la visualisation du projet il faut suivre les étapes suivantes:

1. Clonez le repository depuis Github.
2. Exécutez la commande composer install sur votre terminal.
3. Créez config/db.php à partir du fichier config/db.php.dist et ajoutez les paramètres de votre base de données. Ne supprimez pas le fichier .dist, il doit être conservé.

```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PASSWORD', 'your_db_password');
```

4. Importez database.sql dans votre serveur SQL, vous pouvez le faire manuellement ou utiliser le script migration.php qui importera un fichier database.sql.
5. Lancez le serveur web PHP interne avec php -S localhost:8000 -t public/. L'option -t avec public comme paramètre signifie que votre hôte local ciblera le dossier /public.
6. Allez sur localhost:8000 avec votre navigateur préféré.
7. À partir de ce kit de démarrage, créez votre propre application web.

### Utilisateurs Windows

Si vous développez sous Windows, vous devez éditer votre configuration git pour changer vos règles de fin de ligne avec cette commande :

`git config --global core.autocrlf true`

___

### Me contacter

