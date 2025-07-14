<?php
function dbconnect() {
    static $connect = null;

    if ($connect === null) {
        $connect = mysqli_connect('172.60.0.15', 'ETU002804', 'VPjI8oit', 'db_s2_ETU002804');
        if (!$connect) {
            die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
        }

        mysqli_set_charset($connect, 'utf8mb4');
    }

    return $connect;
  }

  function to_log($email, $mdp){
    $sql = "SELECT * FROM emprunt_membre 
            WHERE email = '%s' 
            AND mdp = '%s'";
    $sql = sprintf($sql, $email, $mdp);
    $result = mysqli_query(dbconnect(), $sql);

    return mysqli_num_rows($result);
}
    function get_loged_membre($email){
    $sql = "SELECT * FROM emprunt_membre WHERE email = '%s'";
    $sql = sprintf($sql, $email);
    $result = mysqli_query(dbconnect(), $sql);
    $donnee = mysqli_fetch_assoc($result);
    return $donnee;
}
    function verify_inscription($email){
    $sql = "SELECT * FROM emprunt_membre WHERE email = '%s'";
    $sql = sprintf($sql, $email);
    $result = mysqli_query(dbconnect(), $sql);

    return mysqli_num_rows($result);
}

    function verify_password($mdp, $mdpbis){
    if($mdp == $mdpbis){
        return true;
    }
    else{
        return false;
    }
}

function add_new_member($nom, $dtn, $genre, $email, $ville, $mdp){
    $sql = "INSERT INTO emprunt_membre (nom, dtn, genre, email, ville, mdp) 
            VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $sql = sprintf($sql, $nom, $dtn, $genre, $email, $ville, $mdp);
    mysqli_query(dbconnect(), $sql);
}

    function get_object(){
        $connexion = dbconnect();
        $sql = "SELECT * FROM v_emprunt_getobject v 
        ORDER BY v.nom_categorie, v.id_objet";

        $result = mysqli_query($connexion, $sql);
        $res = array();
        while ($data = mysqli_fetch_assoc($result)) {
        $res[] = $data;
        }
        return $res;
    }

    function filtrer($categorie) {
        $connexion = dbconnect();
        $sql = "SELECT * FROM v_emprunt_getobject v 
        WHERE v.nom_categorie = '$categorie'
        ORDER BY v.nom_categorie, v.id_objet";

        $result = mysqli_query($connexion, $sql);
        $res = array();
        while ($data = mysqli_fetch_assoc($result)) {
        $res[] = $data;
        }
        return $res;
    }

    function add_pub($titre, $categorie, $images){
        $connexion = dbconnect();
        $mail = $_SESSION['email'];
        $moi = get_loged_membre($mail);
        $IDmembre = $moi['IdMembre'];
    
        $sql_objet = "INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre)
                      VALUES ('$titre', $categorie, $IDmembre)";
        mysqli_query($connexion, $sql_objet);
    
        $id_objet = mysqli_insert_id($connexion);
    
        if (count($images['name']) == 1 
        && $images['name'][0] === 'default.jpg') {
            $sql_img = "INSERT INTO emprunt_image_objet (id_objet, nom_image)
                        VALUES ($id_objet, 'default.jpg')";
            mysqli_query($connexion, $sql_img);
        } else {
            foreach ($images['name'] as $nom_image) {
                $sql_img = "INSERT INTO emprunt_image_objet (id_objet, nom_image)
                            VALUES ($id_objet, '$nom_image')";
                mysqli_query($connexion, $sql_img);
            }
        }
    }
    
    function get_categories(){
        $connexion = dbconnect();
        $sql = "SELECT DISTINCT id_categorie, nom_categorie FROM emprunt_categorie_objet";
        $result = mysqli_query($connexion, $sql);
        $res = array();
        while($data = mysqli_fetch_assoc($result)){
            $res[] = $data;
        }
        return $res;
    }
        function get_one_objet($id,$categorie) {
        $connexion = dbconnect();
        $sql = "SELECT*FROM v_emprunt_getobject v
        WHERE v.id_objet='%s' AND v.id_categorie='%s'";
        $sql = sprintf($sql, $id,$categorie);
        $result = mysqli_query($connexion, $sql);
        $res = array();
        while ($data = mysqli_fetch_assoc($result)) {
            $res[] = $data;
        }
        return $res;
    }

    function get_historique_objet($id_objet, $id_categorie) {
    $connexion = dbconnect();

    $sql = "SELECT * FROM v_emprunt_object 
            WHERE id_objet = '$id_objet'
            AND id_categorie = '$id_categorie'
            ORDER BY v.date_emprunt ASC";

    $result = mysqli_query($connexion, $sql);
    $res = array();
    while ($data = mysqli_fetch_assoc($result)) {
        $res[] = $data;
    }

    return $res;
}
function get_images_objet($id_objet) {
    $connexion = dbconnect();
    $sql = "SELECT nom_image FROM emprunt_image_objet WHERE id_objet = $id_objet";
    $result = mysqli_query($connexion, $sql);
    $res = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $res[] = $row;
    }
    return $res;
}

function get_user_objects() {
    $user = get_loged_membre($_SESSION["email"]);
    $idmembre = $user["id_membre"];  

    $sql = "SELECT o.*, c.nom_categorie, i.nom_image
            FROM emprunt_objet o
            JOIN emprunt_categorie_objet c ON o.id_categorie = c.id_categorie
            LEFT JOIN emprunt_image_objet i ON o.id_objet = i.id_objet
            WHERE o.id_membre = $idmembre
            ORDER BY o.id_objet DESC";

    $result = mysqli_query(dbconnect(), $sql);
    $objects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $objects;
}


function get_emprunt_en_cours($id_objet,$id_categorie){
    $connexion = dbconnect();

    $sql = "SELECT ee.date_retour
            FROM emprunt_emprunt ee
            JOIN emprunt_objet o ON o.id_objet = ee.id_objet
            JOIN emprunt_membre em ON em.id_membre = ee.id_membre
            WHERE date_retour >= CURDATE() AND ee.id_objet = '$id_objet' AND ee.id_categorie='$id_categorie'";
    $result = mysqli_query($connexion, $sql);
}

function emprunter(){
    $user = get_loged_membre($_SESSION["email"]);
    $connexion = dbconnect();
    $sql = "SELECT ";
}

function get_object_emprunt($user){
    $connexion = dbconnect();
    $mail = $_SESSION['email'];
    $moi = get_loged_membre($mail);
    $user = $moi['id_membre'];

    $sql = "SELECT o.id_objet, o.nom_objet, im.nom_image, e.date_emprunt, e.date_retour
            FROM emprunt_emprunt e
            JOIN emprunt_objet o ON e.id_objet = o.id_objet
            LEFT JOIN emprunt_image_objet im ON im.id_objet = o.id_objet
            WHERE e.id_membre = '$user'";

    $result = mysqli_query($connexion, $sql);

    if (!$result) {
        die("Erreur SQL : " . mysqli_error($connexion));
    }

    $res = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $res[] = $row;
    }
    return $res;
}



?>