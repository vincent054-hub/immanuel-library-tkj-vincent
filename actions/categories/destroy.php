<?php
if (isset($_GET['destroy']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    print_r($_GET);
    echo "Delete Success";
}

?>

