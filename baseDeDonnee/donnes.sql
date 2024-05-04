INSERT INTO fabulous.admins (nom,mail,mdp) VALUES
	 ('Anja','anjarandriamanalina@gmail.com','anja');
INSERT INTO fabulous.typesoiree (nom) VALUES
	 ('Mondaine'),
	 ('Professionnel');
INSERT INTO fabulous.typeclients (nom) VALUES
	 ('Particulier'),
	 ('Entreprise');
INSERT INTO fabulous.themes (idTypeSoire,nom) VALUES
	 (1,'Golden Chic'),
	 (1,'Gatsby le magnifique'),
	 (2,'Golden Chic'),
	 (2,'Gatsby le magnifique'),
	 (1,'Brigerton'),
	 (2,'Bal Masqué'),
	 (2,'AfterWork');
INSERT INTO fabulous.clients (idtype,nom,email,contact,adresse) VALUES
	 (1,'Andrianantenaina Sonia','andrianantenainasonia@gmail.com','0320596385','Lot TR6E Mahazoarivo'),
	 (1,'Razafindrakotoson Maphie','razafindrakotosonm@gmail.com','0327498563','Lot VB8 Manakambahiny'),
	 (2,'Ampela mibizina','ampelamibizina@gmail.com','0328967174','Lot GI6P Antanimena');
INSERT INTO fabulous.lieux (nom) VALUES
	 ('Interieur'),
	 ('Exterieur'),
	 ('Espace'),
	 ('Bateau'),
	 ('Terrasse');
INSERT INTO fabulous.services (nom) VALUES
	 ('Service Traiteur'),
	 ('Décoration Fabulous'),
	 ('Animations Musique'),
	 ('Animations Jeux'),
	 ('Bar');
INSERT INTO fabulous.servicesdetails (idservices,nom,prix,details,photo) VALUES
	 (1,'Pack1',200000.0,'Entré froide, entré chaude , résistance, dessert',NULL),
	 (1,'Pack2',100000.0,'Barbecue, viande de votre choix , crustacé',NULL),
	 (1,'Pack3',100000.0,'Cocktail, petit gâteau, éclaire, canapé, mini hamburgeur, mini quiche, mini pizza',NULL),
	 (3,'DJ',2000000.0,'K DJ',NULL),
	 (3,'Orchestre',3000000.0,'Feo Manga Orchestra',NULL),
	 (5,'Pack1',1000000.0,'Sans alcool',NULL),
	 (5,'Pack2',2000000.0,'Avec alcool',NULL),
	 (5,'Pack3',3000000.0,'Avec cocktail',NULL);
INSERT INTO fabulous.reservation (idClient,datePrevue,idTypeSoiree,idTheme,nbParticipants,idLieux,localisation,budget,etat) VALUES
	 (1,'2024-07-05',1,1,50,3,'Bois Vert Ivato',2000000.0,0),
	 (2,'2024-06-08',2,7,20,5,'Ambohiratrimo',200000.0,1);
INSERT INTO fabulous.reservation_service (idreservation,idservice) VALUES
	 (1,1),
	 (1,2),
	 (2,5),
	 (1,3),
	 (2,4);