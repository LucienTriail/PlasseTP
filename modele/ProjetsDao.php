<?php

class ProjetsDao{
    public static function getProjets() {
         require_once 'DB.php';
        $db=DB::getConnection();//connexion a la db
        $sql='select * from projet';
        //compilation de la requete
        $stmt = $db->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
    public static function afficherProjet(){
        require_once 'DB.php';
      $db=DB::getConnection();
      $sql='select id_projet,id_equipe,id_session_formation,titre,sujet,date_debut,date_limite from equipe natural join projet
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
    
    public static function creerProjet(){
        require_once 'DB.php';
      $db=DB::getConnection();
      $sql='insert into projet values (id_projet,id_formateur,id_session_formation,titre,date_limite,sujet,date_debut)';
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
