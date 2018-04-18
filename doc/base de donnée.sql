DROP DATABASE IF EXISTS ultra_gaming;

CREATE DATABASE ultra_gaming;

USE ultra_gaming;

-- Structure table game:
-- ---------------------

DROP TABLE IF EXISTS Game;
CREATE TABLE Game (
	gnum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nameGame VARCHAR(50) NOT NULL,
	editeur VARCHAR(100) NOT NULL,
	plateform VARCHAR(50) NOT NULL,
	prix DECIMAL(10,2) NOT NULL,
	pegi INT(2) NOT NULL,
	genre VARCHAR(255) NOT NULL,
	jacket VARCHAR(100) NOT NULL,
	description VARCHAR(1000) NULL,
	date_parution DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;


-- Contenu de la table `Game`
-- --------------------------

INSERT INTO `Game` (`gnum`, `nameGame`, `editeur`, `plateform`, `prix`, `pegi`, `genre`, `jacket`, `date_parution`, `description`) VALUES
(1, 'Assetto Corsa', 'Kunos Simulazioni', 'pc', '59.99', 3, 'course automobile', 'assettocorsa-pc.jpg', '2014-12-19', 'Jeu de simulation de courses sur PC, Assetto Corsa se démarque par son contenu exclusif notamment pour les voitures proposées. Le joueur pourra y retrouver les plus célèbres circuits dans un environnement toujours plus réaliste.'),
(2, 'The Witcher 3', 'CD Projekt RED', 'pc', '59.99', 3, 'action', 'thewitcher-3-pc.jpg', '2015-05-19', 'he Witcher 3 : Wild Hunt est un Action-RPG se déroulant dans un monde ouvert. Troisième épisode de la série du même nom, inspirée des livres du polonais Andrzej Sapkowski, cet opus relate la fin de l\'histoire de Geralt de Riv.'),
(3, 'Grand theft auto 5', 'Rockstar', 'pc', '59.99', 18, 'action', 'gta-5-pc.jpg', '2013-09-17', 'Jeu d\'action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin. Ces derniers ont élu domicile à Los Santos, ville de la région de San Andreas. Braquages et missions font partie du quotidien du joueur qui pourra également cohabiter avec 15 autres utilisateurs dans cet univers persistant s\'il joue sur PS3/XBOX 360 ou 29 s\'il joue sur PS4/ONE/PC.'),
(4, 'Far Cry 5', 'Ubisoft', 'pc', '59.99', 3, 'action', 'farcry-5-pc.jpg', '2018-03-27', 'Far Cry 5 est un jeu d\'action / aventure jouable en solo. Bienvenue à Hope County dans le Montana, terre de liberté et de bravoure qui abrite un culte fanatique prêchant la fin du monde : Eden’s Gate. Défiez son chef, Joseph Seed, et ses frères et soeur, et libérez les citoyens.'),
(5, 'Far Cry 5', 'Ubisoft', 'ps4', '59.99', 18, 'action', 'farcry-5-ps4.jpg', '2018-03-27', 'Far Cry 5 est un jeu d\'action / aventure jouable en solo. Bienvenue à Hope County dans le Montana, terre de liberté et de bravoure qui abrite un culte fanatique prêchant la fin du monde : Eden’s Gate. Défiez son chef, Joseph Seed, et ses frères et soeur, et libérez les citoyens.'),
(6, 'Far Cry 5', 'Ubisoft', 'xbox', '59.99', 18, 'action', 'farcry-5-xbox.jpg', '2018-03-27', 'Far Cry 5 est un jeu d\'action / aventure jouable en solo. Bienvenue à Hope County dans le Montana, terre de liberté et de bravoure qui abrite un culte fanatique prêchant la fin du monde : Eden’s Gate. Défiez son chef, Joseph Seed, et ses frères et soeur, et libérez les citoyens.'),
(7, 'Grand Theft Auto 5', 'Rockstar', 'xbox', '59.99', 18, 'action', 'gta-5-xbox.jpg', '2013-09-17', 'Jeu d\'action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin. Ces derniers ont élu domicile à Los Santos, ville de la région de San Andreas. Braquages et missions font partie du quotidien du joueur qui pourra également cohabiter avec 15 autres utilisateurs dans cet univers persistant s\'il joue sur PS3/XBOX 360 ou 29 s\'il joue sur PS4/ONE/PC.'),
(8, 'Grand Theft Auto 5', 'Rockstar', 'ps4', '59.99', 18, 'action', 'gta-5-ps4.jpg', '2013-09-17', 'Jeu d\'action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin. Ces derniers ont élu domicile à Los Santos, ville de la région de San Andreas. Braquages et missions font partie du quotidien du joueur qui pourra également cohabiter avec 15 autres utilisateurs dans cet univers persistant s\'il joue sur PS3/XBOX 360 ou 29 s\'il joue sur PS4/ONE/PC.'),
(9, 'Monster Hunter World', 'Capcom', 'ps4', '59.99', 16, 'action', 'mhw.jpg', '2018-01-26', 'La dernière entrée de la série Monster Hunter. Plus complet que jamais, le jeu transporte le joueur au travers de batailles contre de terribles monstres et de magnifiques paysages. Récupérerez des objets sur vos ennemis, créez de nouveaux équipements et armures, explorez tous les territoires disponibles. Saurez vous devenir le chasseur ultime ?'),
(10, 'Dragon Ball FighterZ', ' Arc System Works', 'ps4', '59.99', 12, 'action', 'dragonballfighterz-ps4.jpeg', '2018-01-26', 'Dragon Ball FighterZ est un jeu de combat 2D développé par Arc System Works et édité par Bandai Namco. Cette nouvelle adaptation de la franchise Dragon Ball met en scène les personnages iconiques de la série dans des affrontements explosifs en 3 versus 3.'),
(11, 'Dragon Ball FighterZ', 'Arc System Works', 'xbox', '59.99', 12, 'action', 'dragonballfighterz-xbox.jpeg', '2018-01-26', 'Dragon Ball FighterZ est un jeu de combat 2D développé par Arc System Works et édité par Bandai Namco. Cette nouvelle adaptation de la franchise Dragon Ball met en scène les personnages iconiques de la série dans des affrontements explosifs en 3 versus 3.'),
(12, 'Dragon Ball FighterZ', 'Arc System Works', 'pc', '59.99', 12, 'action', 'dragonballfighterz-pc.jpeg', '2018-01-26', 'Dragon Ball FighterZ est un jeu de combat 2D développé par Arc System Works et édité par Bandai Namco. Cette nouvelle adaptation de la franchise Dragon Ball met en scène les personnages iconiques de la série dans des affrontements explosifs en 3 versus 3.'),
(13, 'Assassin\'s Creed Origins', 'Ubisoft', 'pc', '59.99', 18, 'action', 'aco-pc.jpg', '2017-10-27', 'Assassin\'s Creed Origins est un action RPG en monde ouvert incluant des mécaniques d\'infiltration. Le titre vous fait visiter les terres mystérieuses de l\'Egypte antique dans la peau de Bayek, nouveau héros d\'un épisode nous dévoilant les origines de la création de la confrérie des assassins chère à la série phare d\'Ubisoft.'),
(14, 'Assassin\'s Creed Origins', 'Ubisoft', 'ps4', '59.99', 18, 'action', 'aco-ps4.jpg', '2017-10-27', 'Assassin\'s Creed Origins est un action RPG en monde ouvert incluant des mécaniques d\'infiltration. Le titre vous fait visiter les terres mystérieuses de l\'Egypte antique dans la peau de Bayek, nouveau héros d\'un épisode nous dévoilant les origines de la création de la confrérie des assassins chère à la série phare d\'Ubisoft.'),
(15, 'Assassin\'s Creed Origins', 'Ubisoft', 'xbox', '59.99', 18, 'action', 'aco-xbox.jpeg', '2017-10-27', 'Assassin\'s Creed Origins est un action RPG en monde ouvert incluant des mécaniques d\'infiltration. Le titre vous fait visiter les terres mystérieuses de l\'Egypte antique dans la peau de Bayek, nouveau héros d\'un épisode nous dévoilant les origines de la création de la confrérie des assassins chère à la série phare d\'Ubisoft.'),
(16, 'Super Mario Odyssey', 'Nintendo', 'switch', '59.99', 3, 'plateform', 'marioodyssey-switch.jpg', '2017-10-27', 'Super Mario Odyssey est un jeu de plate-forme sur Switch où la princesse Peach a été enlevée par Bowser. Pour la sauver, Mario quitte le royaume Champignon à bord de l\'Odyssey. Accompagné de Chappy, son chapeau vivant, il doit parcourir différents royaumes et faire tout pour vaincre, une nouvelle fois, le terrible Bowser.'),
(17, 'Splatoon 2', 'Nintendo', 'switch', '59.99', 7, 'action', 'splatoon-2.jpg', '2017-07-21', 'Splatoon 2 sur Switch est un jeu de tir à la troisième personne se jouant massivement en multijoueur. La particularité du titre est que vos différentes armes projettent de la peinture et non des balles. Parcourez des environnements entre amis, aspergez-vous de peinture et transformez-vous en calamars pour vous cacher dans les flaques colorées.'),
(18, 'The Legend of Zelda: Breath of the Wild', 'Nintendo', 'switch', '59.99', 12, 'aventure', 'breathofthewild.jpg', '2017-03-03', 'The Legend of Zelda : Breath of the Wild est un jeu d\'action/aventure. Link se réveille d\'un sommeil de 100 ans dans un royaume d\'Hyrule dévasté. Il lui faudra percer les mystères du passé et vaincre Ganon, le fléau. L\'aventure prend place dans un gigantesque monde ouvert et accorde ainsi une part importante à l\'exploration. Le titre a été pensé pour que le joueur puisse aller où il veut dès le début, s\'éloignant de la linéarité habituelle de la série.'),
(19, 'Kirby Star Allies', 'Nintendo', 'switch', '59.99', 7, 'aventure', 'kirbystarallies.jpg', '2018-03-16', 'Dans cette nouvelle aventure de Kirby, vous pourrez toujours aspirer les ennemis afin de gagner des compétences. Mais ce nouvel opus offre une nouvelle fonctionnalité : le recrutement d\'allié. En effet, vous pourrez recruter vos ennemis afin d\'obtenir de nouvelles capacités.'),
(20, 'Xenoblade Chronicles 2', 'Nintendo', 'switch', '59.99', 12, 'action', 'xenobladechronicles-2.jpg', '2017-12-01', 'Xenoblade Chronicles 2 sur Switch est un RPG dans lequel vous explorez un océan de nuages infini où vivent les derniers rescapés d\'une civilisation sur le dos de monstres colossaux appelés Titans. Vivez l\'histoire de Rex, de sa nouvelle amie Pyra, et d\'une mystérieuse créature appelée Lame qui lui confère un pouvoir immense. Partez ensemble en quête du monde perdu de Pyra, Elysium, le paradis ultime pour toute l\'humanité.');

-- Structure table Users:
-- -------------------------

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
	unum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	icon VARCHAR(100) NOT NULL DEFAULT 'icon.png',
	pseudo VARCHAR(50) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	mail VARCHAR(255) NOT NULL UNIQUE,
	adress VARCHAR(255) NOT NULL,
	numero INT(11) NOT NULL,
	code_postal INT(11) NOT NULL,
	city VARCHAR(255) NOT NULL,
	naissance DATE NOT NULL,
	grade VARCHAR(20) NOT NULL DEFAULT 'user',
	genre VARCHAR(10) NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Contenu de la table `Game`
-- --------------------------

INSERT INTO Users (unum, icon, pseudo, `password`, `name`, firstname, mail, adress, numero, code_postal, city, naissance, grade, genre) VALUES
(1, 'icon.png', 'bdxran', '4f0aa52d656a3d75867f784b7e9c5d23bf1321c0', 'Blondiaux', 'Randy', 'bdxran@hotmail.be', 'Rue de Maubeuge', 12, 7130, 'Binche', '1993-03-01', 'admin','homme');

-- Structure table Orders:
-- -------------------------

DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders (
	onum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idUser INT(11) NOT NULL REFERENCES Customers(idUser),
	idGame INT(11) NOT NULL REFERENCES Game(idGame),
	prix DECIMAL(10,2) NOT NULL,
	odate DATE NOT NULL
)ENGINE=INNODB DEFAULT CHARSET=latin1;
