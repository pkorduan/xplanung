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
    $xplan_enumeration = $params['xplan_enumeration'];
    $hsrcl = $params['hsrcl'];
    $xplan_simpletype = $params['xplan_simpletype'];
    $sql  = "
      SELECT DISTINCT
        xplan_enumeration,
        hsrcl,
        xplan_simpletype
      FROM
        inspire.enumerationtoinspire
      ORDER BY
        xplan_simpletype, xplan_enumeration;
    ";
    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  } # end of get
}
?>