<?php

class SessionDao {
    
    /** session de id $idSession (tableau association),
     * ou null si pas trouvé
     * @param type $idSession
     */
    public static function getById($idSession) {
        $result = null;
        if ($idSession == 1) {
            // Un tableau associatif 
            $result = array(
                "id_session" => 1,
                "nom" => "CDA 1"
            );
        }
        return $result;
    }
    
    public static function getAll() {
        return array(
            array(
                "id_session_formation" => 1,
                "nom" => "CDA 1"
            ),
                 array(
                "id_session_formation" => 1,
                "nom" => "CDA 1"
            )); 
    }
}

