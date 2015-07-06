<?php
class Plan {
  
  function Plan() {
    global $conn;
    $this->conn = $conn;
  }
  
  /*
  * Diese Funktion fragt Plaene ab und gibt diese als Array zurück
  */
  function get($params) {
    # Erzeugt ein json file mit planzeichen
    $conn = pg_connect('dbname=moro user=pgadmin password=PaGeMin2');
    $planart = $params['planart'];
    $planid = $params['planid'];
    $lnd = $params['lnd'];
    $planstatus = $params['planstatus'];
    $bundesland_abk = $params['bundesland_abk'];
    $ebene = $params['ebene'];
    $params['ebene'] = ($params['ebene'] == 'Alle' OR $params['ebene'] == '') ? '' : $params['ebene'];
    $order = $params['order'];
    $orderdir = $params['orderdir'];
    $sql  = "
      SELECT DISTINCT
        p.objectid,
        p.planid,
        p.lnd,
        p.name,
        p.plr,
        p.art,
        p.status,
        p.traeger,
        p.anmerkungen,
        p.ebene_planung,
    		p.datum,
        p.art || ' (' || CASE WHEN a.beschreibung IS NULL THEN 'nicht erfasst' ELSE a.beschreibung END || ')' arttext,
        p.status || ' (' || CASE WHEN s.beschreibung IS NULL THEN 'nicht erfasst' ELSE s.beschreibung END || ')' statustext,
        CASE WHEN pz.planid IS NULL THEN false ELSE true END AS hat_planzeichen,
        CASE WHEN d.object_id IS NULL THEN false ELSE true END AS hat_comments
      FROM
        roplamo.plaene AS p LEFT JOIN
        roplamo.dom_planart a ON p.art = a.code LEFT JOIN
        roplamo.dom_planstatus s ON p.status = s.code LEFT JOIN
        (SELECT DISTINCT object_id FROM roplamo.comments WHERE object_type = 'Plan') AS d ON p.objectid = d.object_id LEFT JOIN
        roplamo.planzeichen pz ON p.planid = pz.planid
      WHERE 1=1
    ";
    if ($planart != '') $sql .= " AND p.art = " . $planart;
    if ($planid != '') $sql .= " AND p.planid = '" . $planid . "'";
    if ($lnd != '') $sql .= " AND p.lnd = " . $lnd;
    if ($planstatus != '') $sql .= " AND p.status = " . $planstatus;
    if ($bundesland_abk != '') $sql .= " AND p.planid LIKE '" . $bundesland_abk . "%'";
    if ($params['ebene'] != '') $sql .= " AND p.ebene_planung = '" . $params['ebene'] . "'";
    $sql .= " ORDER BY ";
    if ($order == '') {
    	$sql .= "p.planid";
    }
    else {
    	$sql .= $order;
    }
    if ($orderdir != '') $sql .= " " . $orderdir;

    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  } # end of get
}
?>