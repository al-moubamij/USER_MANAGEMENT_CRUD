
<?php 
session_start();

include_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
.heading {
    text-align: center;
    padding-top: 4%;
    padding-bottom: 4%;
}
.createbtn {
    float: right;
    padding-bottom: 2%;
}
    </style>
</head>
<body class="container">
    <h3 class="heading">PDO CRUD OPERATIONS</h3>