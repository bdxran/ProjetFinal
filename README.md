# Projet: Ultra Gaming
---------------------------

Site de vente de jeux vidéo dans le cadre du cours de Projet de Développement Web de 2ème Informatique de Gestion à l'IPAM La Louvière.

Par: Blondiaux Randy.

Optimisé pour Chrome.

Le projet utilise:
------------------

Version Apache/2.4.18 (Ubuntu)
Version MySQL 5.7.22-0ubuntu0.16.04.1
Version PHP 7.0.28-0ubuntu0.16.04.1 (cli) (NTS)

Installation:
-------------

-Clone or download
-Extraire le zip
-Renommer le dossier en "Ultra_Gaming"
-Déplacer le dossier dans votre dossier /var/www
-Ensuite dans le terminal executer cette commande :

  sudo nano /etc/apache2/sites-available/Ultra_Gaming.conf

  Et dans ce fichier ajouter ces information et sauvegarder:

  <VirtualHost *:80>

          ServerAdmin votreadressemail
          ServerName Ultra_Gaming.local
          ServerAlias www.Ultra_Gaming.local

          DocumentRoot /var/www/Ultra_Gaming
          <Directory /var/www/Ultra_Gaming>
                  Options Indexes FollowSymLinks MultiViews
                  AllowOverride All
                  Order allow,deny
                  allow from all
          </Directory>

          ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
          <Directory "/usr/lib/cgi-bin">
                  AllowOverride None
                  Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
                  Order allow,deny
                  Allow from all
          </Directory>

          ErrorLog /var/log/apache2/error.log

          # Possible values include: debug, info, notice, warn, error, crit,
          # alert, emerg.
          LogLevel warn

          CustomLog /var/log/apache2/access.log combined

      Alias /doc/ "/usr/share/doc/"
      <Directory "/usr/share/doc/">
          Options Indexes MultiViews FollowSymLinks
          AllowOverride None
          Order deny,allow
          Deny from all
          Allow from 127.0.0.0/255.0.0.0 ::1/128
      </Directory>

  </VirtualHost>

-Ensuite dans le terminal executer cette commande :

  sudo ln -s /etc/apache2/sites-available/Ultra_Gaming.conf /etc/apache2/sites-enabled/Ultra_Gaming.conf

-Ensuite dans le terminal placer vous dans le dossier (etc/) à l'aide de la commande (cd) executer cette commande :

  sudo nano hosts

-Ajouter une ligne avec comme information:

  127.0.0.1       Ultra_Gaming.local

-Ensuite dans le terminal executer cette commande :

  sudo service apache2 restart


Installation dump base de donnée:
---------------------------------

Aller sur phpmyadmin : "http://localhost/phpmyadmin/"

Dans phpmyadmin choisissez l'option nouvelle base de données:

-Aller dans importer
-Choississez un fichier
-Aller dans le dossier doc du projet qui se trouve dans /var/www et prennez le fichier base de donnée.sql
-Exécuter


Valeur à modifier:
------------------

Dans le fichier db.php qui se trouve dans le dossier models/include/ du projet, veuillez modifier les informations de connection à MySQL avec les votre dans PDO.

Information pratique:
---------------------

admin: login=bdxran password=link
user: login=sicile64 password=123

