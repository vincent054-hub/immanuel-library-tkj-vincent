<?php
require_once __DIR__ . '/../../repositories/author-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteAuthor($id);
    echo "delete success";
    print_r($_GET);
    exit;
}

header("Location: ../../pages/authors/index.php");
exit;