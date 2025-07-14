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

