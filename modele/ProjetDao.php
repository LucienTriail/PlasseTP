<?php

class ProjetDao {

    public static function getProjets($idProjet) {
        require_once 'DB.php';
        $db = DB::getConnection(); //connexion a la db
        $sql = 'select * from projet ';
        //compilation de la requete
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //jai reussi ca
    }

    public static function getById($idProjet) {
        //on recupere le projet,codé en dur
        /*$result = null;
        $result = array(
            "id_projet" => $idProjet,
            "titre" => "projet test",
            "sujet" => "sujet 1",
            "date_debut" => "01/01/2000",
            "date_limite" => "02/01/2020");

        return $result;*/
        require_once 'DB.php';
        $db = DB::getConnection(); //connexion a la db
        $sql = 'select * from projet where id_projet=:idProjet';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":idProjet", $idProjet);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getEquipesByIdProjet($idProjet) {
        //on recupere les equipes du projet,codé en dur
        //un array contient l'array equipe,lui meme contenant l'array membres, chaque membre etant un array
        $result = null;
        $result = array(
            array(
                "id_equipe" => 1,
                "membres" => array(
                    array(
                        "id_membre" => 1,
                        "nom" => "jean",
                        "prenom" => "paul"),
                    array(
                        "id_membre" => 2,
                        "nom" => "jeanne",
                        "prenom" => "paule"),
                )
            )
        );
        return $result;
    }

    public static function creerProjet() {
        require_once 'DB.php';
        $db = DB::getConnection();
        $sql = 'insert into projet values (id_projet,id_formateur,id_session_formation,titre,date_limite,sujet,date_debut)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam("id_projet", $id_projet);
        $stmt->bindParam("id_formateur", $id_equipe);
        $stmt->bindParam("id_session_formation", $idSession);
        $stmt->bindParam("titre", $titre);
        $stmt->bindParam("date_limite", $date_limite);
        $stmt->bindParam("sujet", $sujet);
        $stmt->bindParam("date_debut", $date_debut);
        $stmt->execute();
    }

}

?>
