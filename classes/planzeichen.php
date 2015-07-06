<?php
class Planzeichen {
  
  function Planzeichen() {
    global $conn;
    $this->conn = $conn;
  }
  
  /*
  * Diese Funktion fragt Planzeichen ab und gibt diese als Array zurück
  */
  function get($params) {
    $go = $params['go'];
    $url  = "index.php?go=".$go;
    $bundesland_abk = $params['bundesland_abk'];
    $kernmodell = ($params['kernmodell'] == 'Alle' OR $params['kernmodell'] == '') ? '' : $params['kernmodell'] ;
    $rechtscharakter = ($params['rechtscharakter'] == 'Alle' OR $params['rechtscharakter'] == '') ? '' : $params['rechtscharakter'] ;
    $planstatus = ($params['planstatus'] == 'Alle' OR $params['planstatus'] == '') ? '' : $params['planstatus'] ;
    $url .= "&bundesland=" . $bundesland;
    $lnd = $params['lnd'];
    $url .= "&lnd=" . $lnd;
    $planid = $params['planid'];
    $url .= "&planid=" . $planid;	
    $rechtsstatus = $params['rechtsstatus'];
    $url .= "&rechtsstatus=" . $rechtsstatus;
    $raeumlichekonkretheit = $params['raeumlichekonkretheit'];
    $url .= "&raeumlichekonkretheit=" . $raeumlichekonkretheit;
    $gebietstyp = $params['gebietstyp'];
    $url .= "&gebietstyp=" . $gebietstyp;
    $art = $params['art'];
    $url .= "&art=" . $art;
    $objectid = $params['objectid'];
    $url .= "&objectid=" . $objectid;
    $planstatus = $params['planstatus'];
    $url .= "&planstatus=" . $planstatus;
    $plr= $params['plr'];
    $url .= "&plr=" . $plr;
    $order = $params['order'];
    $orderdir = $params['orderdir'];
    $package = $params['package'];
    $sql  = "
      SELECT
        p.objectid,
        p.legcode,
        p.planid,
        p.name,
        p.gruppe,
        p.untergr,
        p.sonst,
        p.kernmodelleigen,
        p.featuretypeeigen,
        p.enumerationseigen,
        p.xplan_rprechtscharakter_entwurf,
        p.rprechtsstandeigen,
        p.xplan_rpgebietstyp_entwurf,
        p.rstatus || ' (' || CASE WHEN r.beschreibung IS NULL THEN 'nicht erfasst' ELSE  r.beschreibung END || ')' rstatus,
        p.rkonkr || ' (' || CASE WHEN k.beschreibung IS NULL THEN 'nicht erfasst' ELSE  k.beschreibung END || ')' rkonkr,
        p.rogebtyp || ' (' || CASE WHEN g.beschreibung IS NULL THEN 'nicht erfasst' ELSE  g.beschreibung END || ')' rogebtyp,
        CASE WHEN d.object_id IS NULL THEN false ELSE true END AS hat_comments,
    		pl.status,
    		pl.plr
      FROM
        roplamo.planzeichen AS p LEFT JOIN
        roplamo.dom_recht r ON p.rstatus = r.code LEFT JOIN
        roplamo.dom_rkonkr k ON p.rkonkr = k.code LEFT JOIN
        roplamo.dom_rogeb g ON p.rogebtyp = g.code LEFT JOIN
        (SELECT DISTINCT object_id FROM roplamo.comments WHERE object_type = 'Planzeichen') AS d ON p.objectid = d.object_id LEFT JOIN
    		roplamo.plaene AS pl ON p.planid = pl.planid
      WHERE 1=1
    ";
    if ($bundesland_abk != '') $sql .= " AND p.legcode LIKE '" . $bundesland_abk . "%'";
    if ($kernmodell != '') $sql .= " AND p.kernmodelleigen LIKE '" . $kernmodell . "'";
    if ($rechtscharakter != '') $sql .= " AND p.xplan_rprechtscharakter_entwurf LIKE '" . $rechtscharakter . " %'";
    if ($planid != '') $sql .= " AND p.planid = '" . $planid . "'";
    if ($rechtsstatus != '') $sql .= " AND rstatus = " . $rechtsstatus;
    if ($raeumlichekonkretheit != '') $sql .= " AND rkonkr = " . $raeumlichekonkretheit;
    if ($gebietstyp != '') $sql .= " AND rogebtyp = " . $gebietstyp;
    if ($planstatus != '') $sql .= " AND pl.status = " . $planstatus;
    if ($plr != '') $sql .= " AND pl.plr = " .$plr;
    $sql .= " ORDER BY ";
    if ($order == '') {
    	$sql .= "p.legcode";
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