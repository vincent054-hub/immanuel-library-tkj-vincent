<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteBook($id);
    echo "delete success";
    print_r($_GET);
    exit;
}

header("Location: ../../pages/books/index.php");
exit;