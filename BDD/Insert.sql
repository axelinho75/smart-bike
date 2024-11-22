insert into Velo (ID_Velo,Photo,Description_velo,Prix) values 
(1,'Velos/Velo1/Velo1.jpg','Avec son mono plateau, profitez dun changement de vitesses simple et rapide. Ce VTT est conçu pour vos premières randonnées à vélo.',339),
(2,'Velos/Velo2/Velo2.jpg','Nous avons équipé ce VTT 24 pouces d une fourche suspendue et de freins V-brake. Grâce à ses 18 vitesses vous pouvez aborder aisément des sentiers vallonnés et profiter du relief! Nous avons conçu ce vélo tout terrain pour les enfants de 9 à 12 ans (135 à 150 cm) souhaitant pratiquer régulièrement et affronter facilement les obstacles.', 220),
(3,'Velos/Velo3/Velo3.jpg','Avec ce vélo de ville à assistance électrique (VAE), dotez vous d une aide pour rejoindre plus facilement votre destination, sans transpirer excessivement tout en maîtrisant parfaitement votre temps ! Ce vélo à assistance électrique vous emmènera confortablement et facilement dans vos trajets occasionnels en milieu urbain et lors de vos besoins de transport.',799),
(4,'Velos/Velo4/Velo4.jpg',"Pour affronter facilement les obstacles des terrains accidentés, nous avons équipé ce VTT 20 pouces d'une fourche suspendue. Le cadre aluminium apporte solidité, légèreté et dynamisme.",320);

CREATE TABLE Velo(
   ID_Velo INT,
   Photo VARCHAR(100),
   Description_velo VARCHAR(250),
   Prix DECIMAL (15,2) NOT NULL,
   PRIMARY KEY(ID_Velo)
);

CREATE TABLE Clients(
   ID_Client INT,
   Prenom VARCHAR(50),
   Nom VARCHAR(50),
   Code_Postal INT,
   Ville VARCHAR(100),
   Pays VARCHAR(100),
   PRIMARY KEY(ID_Client)
);

CREATE TABLE Commandes(
   ID_Commande INT,
   Date_Commande DATE,
   Date_Livraison DATE,
   Code_Postal_Livraison INT,
   Ville_Livraison VARCHAR(100),
   Pays_Livraison VARCHAR(100),
   ID_Client INT NOT NULL,
   PRIMARY KEY(ID_Commande),
   FOREIGN KEY(ID_Client) REFERENCES Clients(ID_Client)
);

CREATE TABLE Detail_Commande(
   ID_Velo INT,
   ID_Commande INT,
   Quantite INT,
   Prix_total VARCHAR(50),
   PRIMARY KEY(ID_Velo, ID_Commande),
   FOREIGN KEY(ID_Velo) REFERENCES Velo(ID_Velo),
   FOREIGN KEY(ID_Commande) REFERENCES Commandes(ID_Commande)
);

CREATE TABLE Contacts(
   ID_Contact VARCHAR(50),
   Nom VARCHAR(50),
   Prenom VARCHAR(50),
   Mail VARCHAR(150) NOT NULL,
   Message_client VARCHAR(500) NOT NULL,
   ID_Client INT NOT NULL,
   PRIMARY KEY(ID_Contact),
   FOREIGN KEY(ID_Client) REFERENCES Clients(ID_Client)
);

