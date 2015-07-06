<?php
class User {
  
  function User() {
    global $conn;
    $this->conn = $conn;
  }
  
  function get($params) {
    $sql = "
      SELECT
        id,
        username,
        rechte,
        vorname,
        nachname,
        organisation
      FROM
        roplamo.users
      WHERE
        1=1 AND";
    if ($params['username'] != '') $sql .= " username = '" . $params['username'] . "'";
    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  }
}
?>