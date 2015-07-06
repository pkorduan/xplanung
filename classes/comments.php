<?php
class Comment {
  
  function Comment() {
    global $conn;
    $this->conn = $conn;
  }
  
  /*
  * Diese Funktion fragt Kommentare ab und gibt diese als Array zurück
  */
  function get($params) {
    $sql = "
      SELECT
        c.id,
        c.object_type,
        c.object_name,
        c.object_id,
        c.user_id AS author_id,
        u.vorname AS author_forename,
        u.nachname AS author_surename,
        u.username AS author_username,
        u.organisation AS author_organisation,
        c.created_at,
        c.message,
        CASE WHEN d.id IS NULL THEN false ELSE true END AS hat_comments
      FROM
        roplamo.comments c LEFT JOIN
        roplamo.users u ON (c.user_id = u.id) LEFT JOIN
        (SELECT DISTINCT id FROM roplamo.comments WHERE object_type = 'Kommentar') AS d ON d.id = c.object_id
      WHERE
        1=1
    ";
    if (!in_array($params['object_type'], array('', 'Alle'))) $sql .= " AND c.object_type = '" . $params['object_type'] . "'";
    if ($params['object_id'] != '') $sql .= " AND c.object_id = '" . $params['object_id'] . "'";
    if ($params['object_name'] != '') $sql .= " AND c.object_name = '" . $params['object_name'] . "'";
    if ($params['author_id'] != '') $sql .= " AND c.user_id = " . $params['author_id'];

    $sql .= "
      ORDER BY
        c.created_at DESC,
        u.username,
        c.object_type
    ";

    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  }
  
  function create($params) {
    include('classes/users.php');
    $user = new User;
    $users = $user->get(
      array(
        'username' => $_SESSION['username']
      )
    );
    $sql = "
      INSERT INTO
        roplamo.comments (
          object_type,
          object_id,
          object_name,
          user_id,
          created_at,
          message
        )
      VALUES (" .
        "'" . $params['new_object_type'] . "', " .
        "'" . $params['new_object_id'] . "', " .
        "'" . $params['new_object_name'] . "', " .
        $users[0]['id'] . ", " .
        "current_timestamp" . ", " .
        "'" . $params['new_comment'] . "'
      )
    ";
    
    #echo $sql;
    $result = pg_query($this->conn, $sql);
    $data = pg_fetch_all($result);
    if ($data == false) $data = array();
    return $data;
  }
}
?>
