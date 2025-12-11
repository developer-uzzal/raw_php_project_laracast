<?php

require "Validator.php";

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (!Validator::string($_POST['body'], 1,100)) {
        $errors['body'] = "Note body is required and must be between 1 and 100 characters";
    }

    // if (strlen($_POST['body']) > 100) {
    //     $errors['body'] = "Note body is too long, max 1000 characters";
    // }

    if (empty($errors)) {

        $db->query("insert into notes (body, user_id) values (:body, :user_id)", [
            'body' => filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'user_id' => 1
        ]);
    }

    // header("Location: /notes");
}

require "views/notes/create.view.php";
