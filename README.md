# boutiqueTshirtXavbene

exercice d'un projet de site en php de boutique en ligne

installer le serveur xampp https://www.apachefriends.org/fr/download.html

xampp s'installe a la racine du disque

télécharger le code en zip et 
installer les fichiers du repertoire dans le repertoire c:/xampp/htdocs/boutiquephp/

créer une BDD "boutique" dans mysql puis créer une table avec ce code :

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

lancer Apache et mySQL dans xampp 

puis taper https://localhost/boutiquephp/ dans un navigateur


pensez a installer Xamp et etc

ezfhqgzelvibqerl
Burger
hot dog
pizza
lasagne