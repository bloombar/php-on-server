<?php

session_start();

$cxn = new mysqli('warehouse', 'amos', 'pqvksah8', 'amos_db_design_spring_2016');

$task_id = $cxn->real_escape_string($_GET['id']);
$user_id = $cxn->real_escape_string(session_id());

$q = "DELETE FROM to_do_list WHERE id={$task_id} AND user_id='{$user_id}'";

$result = $cxn->query($q);

header("Location: ./");

?>
