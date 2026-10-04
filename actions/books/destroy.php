<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteBook($id);
    die("delete success");
}

header("Location: ../../pages/books/index.php");
exit;