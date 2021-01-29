<?php

class SessionDao {
    /*     * session de id idSession (tableau associatif)
     * #param type $idSession* */

    // public static function getById($idSession) {
    //     $result = null;
    //     if ($idSession == 1) {
    //         $result = array("idSession" => 1, "nom" => "CDA1");
    //     }
    //    return $result;
    // }

    public static function getAll() {
        require_once 'DB.php';
        $db = DB::getConnection();
        $sql = "select * from session_formation";
        $stmt = $db->prepare($sql);
        $stmt->execute(); //RETOURNER LES LIGNES RESULTATS SOUS FORME 
        //DE TABLEAUX ASSOCIATIVES 
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //    return [array("idSession" => 1, "nom" => "CDA1"),
        //       array("idSession" => 2, "nom" => "CDA2")
        //       ];
    }
}

?>
