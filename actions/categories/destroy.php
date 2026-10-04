<?php
require_once __DIR__ . '/../../repositories/category-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteCategory($id);
    die("delete success");
}

header("Location: ../../pages/books/index.php");
exit;