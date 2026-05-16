<?php

try {

    $conn = new PDO(
        "mysql:host=sql111.infinityfree.com;dbname=if0_41932564_webapp;charset=utf8",
        "if0_41932564",
        "qafLlfYO9R"
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());
}