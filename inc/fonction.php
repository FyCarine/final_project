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
?>