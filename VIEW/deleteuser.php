<?php
include_once __DIR__ . '/../config.php';
if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: /medium%20crud/VIEW/");
} else {
    $stmt = $connect->prepare('DELETE from user where id = :id');
    $stmt->execute(array(
        ':id' => $_GET["id"]
    ));
    header("Location: /medium%20crud/VIEW/");
}
?>