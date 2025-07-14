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


-- Objets de Flora (id_membre = 2)
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Pinceau maquillage', 1, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Trousse maquillage', 1, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Lisseur', 1, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Tournevis', 2, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Marteau', 2, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cle anglaise', 3, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cle plate', 3, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Four electrique', 4, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Mixeur', 4, 2);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Moulinette', 4, 2);

-- Objets de Mendrika (id_membre = 3)
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Seche ongles', 1, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Trousse pedicure', 1, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Fer a boucler', 1, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Perceuse sans fil', 2, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Tournevis cruciforme', 2, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Pompe a pied', 3, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cle a pipe', 3, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Micro onde', 4, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Cafetiere', 4, 3);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Friteuse', 4, 3);

-- Objets de Bolo (id_membre = 4)
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Set maquillage', 1, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Trousse coiffure', 1, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Kit epilation', 1, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Perforateur', 2, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Pistolet a colle', 2, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Compresseur', 3, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Crics voiture', 3, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Appareil raclette', 4, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Sorbetiere', 4, 4);
INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES ('Crepiere', 4, 4);

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

INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (11, 'pinceau_maquillage.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (12, 'trousse_maquillage.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (13, 'lisseur.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (14, 'tournevis.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (15, 'marteau.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (16, 'cle_anglaise.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (17, 'cle_plate.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (18, 'four_electrique.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (19, 'mixeur.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (20, 'moulinette.jpg');

INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (21, 'seche_ongles.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (22, 'trousse_pedicure.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (23, 'fer_boucler.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (24, 'perceuse_sans_fil.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (25, 'tournevis_cruciforme.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (26, 'pompe_pied.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (27, 'cle_pipe.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (28, 'micro_onde.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (29, 'cafetiere.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (30, 'friteuse.jpg');

INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (31, 'set_maquillage.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (32, 'trousse_coiffure.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (33, 'kit_epilation.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (34, 'perforateur.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (35, 'pistolet_colle.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (36, 'compresseur.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (37, 'cric_voiture.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (38, 'appareil_raclette.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (39, 'sorbetiere.jpg');
INSERT INTO emprunt_image_objet (id_objet, nom_image) VALUES (40, 'crepiere.jpg');


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


CREATE OR REPLACE VIEW v_emprunt_getobject AS
SELECT c.id_categorie, o.id_objet, c.nom_categorie, o.nom_objet, i.nom_image, e.date_retour
FROM emprunt_objet o 
JOIN emprunt_categorie_objet c 
ON o.id_categorie = c.id_categorie
LEFT JOIN emprunt_image_objet i ON
o.id_objet = i.id_objet
LEFT JOIN emprunt_emprunt e ON
o.id_objet=e.id_objet AND 
e.date_retour >= CURDATE();

CREATE OR REPLACE VIEW v_emprunt_object AS
SELECT em.nom AS emprunteur,
                em.ville,
                em.email,
                eo.nom_objet,
                eco.nom_categorie,
                ee.date_emprunt,
                ee.date_retour,
                eio.nom_image
            FROM emprunt_emprunt ee
            JOIN emprunt_objet eo ON ee.id_objet = eo.id_objet
            JOIN emprunt_categorie_objet eco ON eo.id_categorie = eco.id_categorie
            JOIN emprunt_membre em ON ee.id_membre = em.id_membre
            LEFT JOIN emprunt_image_objet eio ON eo.id_objet = eio.id_objet; 

ORDER BY c.nom_categorie, o.id_objet;