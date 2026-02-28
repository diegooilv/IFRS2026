<?php
require_once __DIR__ . "/../connect.php";

class User
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = connectDb();
    }

    public function create($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (userName, email, hashPassword) VALUES (:name, :email, :hash)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ":name" => $name,
            ":email" => $email,
            ":hash" => $hash
        ]);
    }

    public function getAllUsers()
    {
        $sql = "SELECT userName, email FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}