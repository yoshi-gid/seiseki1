<?php
session_start();
require('../db/dbconnect.php');

$id = $_GET['id'];

$delete = $db->prepare('DELETE from exams where id=?');
$delete->execute(array($id));

header('Location:index.php');
exit();
?>