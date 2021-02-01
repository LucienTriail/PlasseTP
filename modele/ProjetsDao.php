<?php

class ProjetsDao{
    public static function getProjets() {
         require_once 'DB.php';
        $db=DB::getConnection();//connexion a la db
        $sql='select * from projets';
        //compilation de la requete
        $stmt = $db->prepare($sql);
      $stmt->execute();
        
    }
    
    public static function afficherProjet(){
        require_once 'DB.php';
      $db=DB::getConnection();
      $sql='select id_projet,id_equipe,id_session_formation,titre,sujet,date_debut,date_limite from equipe natural join projet
where projet.id_projet=equipe.id_projet';
      $stmt = $db->prepare($sql);
      $stmt->execute();
    }
}

?>
