<?php
require_once __DIR__ . '/../../repositories/user-repository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    deleteUser($id);
    echo "delete success";
    print_r($_GET);
    exit;
}

header("Location: ../../pages/users/index.php");
exit;