<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## ToDo List Application 

Cette application ToDo List est une application web simple et intuitive développée avec le framework Laravel. Elle permet aux utilisateurs de gérer leurs tâches quotidiennes de manière efficace en offrant des fonctionnalités de base comme la création, la visualisation, la mise à jour et la suppression de tâches.

## Fonctionnalités

    - Créer une tâche : Ajoutez de nouvelles tâches avec un titre et une description.
    - Visualiser les tâches : Consultez la liste de toutes les tâches ajoutées.
    - Mettre à jour une tâche : Modifiez le titre et la description des tâches existantes.
    - Supprimer une tâche : Supprimez les tâches terminées ou non désirées.
    - Marquer comme terminée : Indiquez les tâches terminées.

## Pré-requis : 

    - Visual Studio Code
    - WAMP Server
    - PHP 8.2.18
    - Composer
    - Node.js et npm

## Instructions :

Ouvrir le dossier wamp/www dans VS Code et ouvrir un terminal afin d'y effectuer les commandes.

1. Cloner le dépôt :

        git clone https://github.com/Lau-Hinnekint/laravel_todolist.git


2. Accéder au répertoire du projet : 

        cd laravel_todolist

    
3. Installer les dépendances : 

        composer install
        npm install


4. Configurez l'environnement : 

    * Crée une base de données au sein de phpMyAdmin avec le nom souhaité, pour ma part il s'agissait de "laravel_todolist"
    * Renommer le fichier ".env.exemple" en ".env" avec vos paramètres de connexion à la base de données et le nom de la base de données que vous avez crée. (ligne 22 à 27 par défaut) 
    
        /!\ S'assurer que DB_CONNECTION=mysql /!\

        Paramètre lors du développement : 
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel_todolist
            DB_USERNAME=root
            DB_PASSWORD=

    * Toujours dans le fichier .env modifier la ligne 8 afin d'avoir la traduction française de l'application.

            APP_LOCALE=fr


De retour dans le terminal 

5. Générez la clé d'application : 
    
        php artisan key:generate


6. Exécutez les migrations de la base de données : 

        php artisan migrate

    /!\     Si une erreur se produit pour la création de la table "users" par rapport à la longueur des chaines de caractères, modifier dans phpMyAdmin la variable "default storage engine" en "InnoDB"    /!\

    /!\                                             Commande à effectuer dans l'onglet "SQL" de phpMyAdmin =>       SET GLOBAL default_storage_engine = 'InnoDB';                                           /!\ 

    /!\                                              Supprimer les tables crées dans la base de données et effectuer à nouveau la commande : php artisan migrate                                            /!\


7. Lancer le serveur de développement : 

        npm run dev


8. Accédez à l'application dans votre navigateur :

    http://localhost/laravel_todolist/public/

    A partir de là vous pouvez crée un compte utilisateur en cliquant sur "Inscription" en haut à droite de la page. 

    Une fois le compte crée vous êtes automatiquement connecté et prêt à utiliser la ToDoList.










## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).





