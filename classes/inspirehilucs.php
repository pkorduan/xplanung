<?php
class Inspire {

  function Inspire() {
    global $conn;
    $this->conn = $conn;
  }
  
  /*
  * Diese Funktion fragt INSPIRE-Daten aus der Datenbank ab und gibt diese als Array zurück
  */
  function get($params) {
    # Erzeugt ein json file mit planzeichen
    $xplan_featuretype = $params['xplan_featuretype'];
    $attribut = $params['attribut'];
    $attribut_wert = $params['attribut_wert'];
    $hilucs_wert = $params['hilucs_wert'];
    $sql  = "
      SELECT
        xplan_featuretype,
        attribut,
        attribut_wert,
        hilucs_wert
      FROM
        xplan.xplantoinspire
      WHERE 
        attribut IS NOT NULL AND
        attribut_wert IS NOT NULL AND
        xplan_featuretype IS NOT NULL
      ORDER BY
        xplan_featuretype,
        attribut,
        attribut_wert
    ";
    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  } # end of get
}
?>