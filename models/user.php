<?php

class User{
    private $name;
    private $email;
    private $password;
    private $phone;

    public function __construct($name, $email, $password, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }

    public static function createUser($pdo, $name, $email, $password, $phone) {
        $stmt = $pdo->prepare('INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT), $phone]);
    }

    public static function getUserByEmail($pdo, $email) {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
}