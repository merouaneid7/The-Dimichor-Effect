--site web hebrege
Rendez-vous à l’adresse suivante : https://serious-mammoth.pikapod.net/wp-admin/

Connectez-vous avec vos identifiants administrateurs :
Nom d'utilisateur : wpminiprojet
Mot de passe : wpminiprojet

Une fois connecté, vous serez redirigé vers le tableau de bord administrateur.


--Localement
1. Cloner le dépôt
Téléchargez ou clonez ce dépôt : git clone https://github.com/merouaneid7/The-Dimichor-Effect
Placez les fichiers du projet dans le dossier htdocs de XAMPP : C:\xampp\htdocs\[nom_du_projet]

2. Créer et importer la base de données
Accédez à phpMyAdmin :
http://localhost/phpmyadmin

Créez une nouvelle base de données :
Nom de la base : cmsminiprojet

Importez le fichier SQL fourni dans ce dépôt :
Allez dans l'onglet Importer et sélectionnez cmsminiprojet.sql

3. Configurer WordPress
Ouvrez le fichier wp-config.php dans le projet.
Modifiez les informations suivantes pour correspondre à votre configuration locale :
define('DB_NAME', 'nom_de_la_base');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

4. Démarrer le site
Ouvrez votre navigateur et accédez au site :
http://localhost/nom_du_projet

Connectez-vous à l'administration WordPress via :
http://localhost/nom_du_projet/wp-admin

Identifiants administrateur principal
Nom d'utilisateur : wpminiprojet
Mot de passe : idha2004@@


