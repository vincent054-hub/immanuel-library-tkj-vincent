<?php
require_once __DIR__ . '/../../repositories/category-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteCategory($id);
    echo "delete success";
    print_r($_GET);
    exit;
}

header("Location: ../../pages/categories/index.php");
exit;