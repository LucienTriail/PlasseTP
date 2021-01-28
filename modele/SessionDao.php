<?php
 class SessionDao {
     /** session de id £idSession (tableau association) 
      * ou null si pas trouvé
      * @param type $idSession
      */
     
  
     public static function getById($idSession){
         $resultat = NULL;
                 if ($idSession==1){ 
                 $resultat = array (
                     "id_Session" => 1, 
                     "nom" => "CDA1");}
                     return $resultat ;  
        }
                 
    }
 