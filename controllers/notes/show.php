<?php
$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$note = '';
$id = $_GET['id'];
$query = "select * from notes where id = :id";

$note = $db->query($query, ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);



require "views/notes/show.view.php";