<?php

class SessionDao {
    /*     * session de id idSession (tableau associatif)
     * #param type $idSession* */

    public static function getById($idSession) {
        $result = null;
        if ($idSession == 1) {
            $result = array("idSession" => 1, "nom" => "CDA1");
        }
        return $result;
    }

    public static function getAll() {

        return [array("idSession" => 1, "nom" => "CDA1"),
            array("idSession" => 2, "nom" => "CDA2")
            ];
    }

}

?>