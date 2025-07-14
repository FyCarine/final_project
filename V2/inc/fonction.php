<?php
function dbconnect() {
    static $connect = null;

    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', '', 'exam');
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
            ORDER BY date_emprunt ASC";

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

?>