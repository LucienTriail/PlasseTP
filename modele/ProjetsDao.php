<?php

class ProjetsDao {

    /** Projets de la session de formation $idSession,
     * sous la forme d'un tableau de tableaux associatifs
     * reprenant l'ensemble des colonnes du tableau SQL projet
     * @param type $idSessionFormation
     * @return type
     */
    public static function getProjetsByIdSession($idSession) {
        require_once 'DB.php';
        $db = DB::getConnection(); //connexion a la db
        $sql = 'SELECT *
                FROM projet 
                WHERE id_session_formation = :id_session_formation';
        //compilation de la requete
        $stmt = $db->prepare($sql);
        // Donner sa valeur au parametre
        $stmt->bindParam(":id_session_formation", $idSession);
        // Executer
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function afficherProjet() {
        require_once 'DB.php';
        $db = DB::getConnection();
        $sql = 'select id_projet,id_equipe,id_session_formation,titre,sujet,date_debut,date_limite from equipe natural join projet
where projet.id_projet=equipe.id_projet';
        $stmt = $db->prepare($sql);
        $stmt->bindParam("id_projet", $id_projet);
        $stmt->bindParam("id_equipe", $id_equipe);
        $stmt->bindParam("id_session_formation", $idSession);
        $stmt->bindParam("titre", $titre);
        $stmt->bindParam("sujet", $sujet);
        $stmt->bindParam("date_debut", $date_debut);
        $stmt->bindParam("date_limite", $date_limite);
        $stmt->execute();
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
