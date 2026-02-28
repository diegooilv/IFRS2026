<?php
function connectDb() {
    try {
        $connect = new PDO(
            "mysql:host=db;dbname=app;charset=utf8",
            "user",
            "user123"
        );

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;

    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
}