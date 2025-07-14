CREATE TABLE emprunt_membre(
    id_membre INTEGER AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    dtn DATE,
    genre CHAR,
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(100),
    image_profil VARCHAR(100)

);
CREATE TABLE emprunt_categorie_objet(
    id_categorie INTEGER AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100)
);
CREATE TABLE emprunt_objet(
    id_objet INTEGER AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100),
    id_categorie INTEGER,
    id_membre INTEGER
);
CREATE TABLE emprunt_image_objet(
    id_image INTEGER AUTO_INCREMENT PRIMARY KEY,
    id_objet INTEGER,
    nom_image VARCHAR(100)
);
CREATE TABLE emprunt_emprunt(
    id_emprunt INTEGER AUTO_INCREMENT PRIMARY KEY,
    id_objet INTEGER,
    id_membre INTEGER,
    date_emprunt DATE,
    date_retour DATE
);
INSERT INTO emprunt_membre (nom, dtn, genre,email,ville,mdp,image_profil) 
VALUES ('Magi', '12-02-2000', 'F', 'magi@gmail.com','Tananarivo', 'magi123', 'magi.jpg'); 

INSERT INTO emprunt_membre (nom, dtn, genre,email,ville,mdp,image_profil) 
VALUES ('Flora', '16-11-1999', 'F', 'flora@gmail.com','Majunga', 'flora123', 'flora.jpg'); 

INSERT INTO emprunt_membre (nom, dtn, genre,email,ville,mdp,image_profil) 
VALUES ('Mendrika', '22-04-2005', 'H', 'mendrika@gmail.com','Tulear', 'mendrika123', 'mendrika.jpg'); 

INSERT INTO emprunt_membre (nom, dtn, genre,email,ville,mdp,image_profil) 
VALUES ('Bolo', '25-03-2006', 'H', 'bolo@gmail.com','Tamatave', 'bolo123', 'bolo.jpg'); 

INSERT INTO emprunt_categorie_objet (nom_categorie) VALUES ('esthetique');
INSERT INTO emprunt_categorie_objet (nom_categorie) VALUES ('bricolage');
INSERT INTO emprunt_categorie_objet (nom_categorie) VALUES ('mecanique');
INSERT INTO emprunt_categorie_objet (nom_categorie) VALUES ('cuisine');

INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Seche cheveux', 1, 1);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Perceuse', 2, 1);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Tournevis', 2, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cle a molette', 3, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Batteur electrique', 4, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Bouilloire', 4, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Pinceau maquillage', 1, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Trousse manucure', 1, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Scie sauteuse', 2, 1);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cle dynamometrique', 3, 2);

INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (1, 'seche_cheveux.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (2, 'perceuse.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (3, 'tournevis.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (4, 'cle_molette.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (5, 'batteur.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (6, 'bouilloire.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (7, 'pinceau.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (8, 'manucure.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (9, 'scie.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (10, 'cle_dynamo.jpg');

INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (1, 2, '2025-07-01', '2025-07-10');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (2, 3, '2025-07-02', '2025-07-12');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (3, 4, '2025-07-03', '2025-07-13');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (4, 1, '2025-07-04', '2025-07-14');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (5, 2, '2025-07-05', '2025-07-15');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (6, 4, '2025-07-06', '2025-07-16');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (7, 3, '2025-07-07', '2025-07-17');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (8, 1, '2025-07-08', '2025-07-18');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (9, 2, '2025-07-09', '2025-07-19');
INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (10, 4, '2025-07-10', '2025-07-20');
