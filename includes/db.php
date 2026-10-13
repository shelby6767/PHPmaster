<?php

function connectDb(): PDO {
    $pdo = new PDO('sqlite:' . DB_DIR . '/' . 'db.sqlite');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function loadSchema(PDO $pdo, string $schemaFile): void {
    $sql = file_get_contents($schemaFile);
    if (false === $sql) {
        die("Failed to read schema file: $schemaFile");
    }
    $pdo->exec($sql);
    echo "Schema Loaded Successfully. \n";
}

function insertMessage(PDO $pdo, string $name, string $email, string $message): bool {
    $sql ="INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
    $stmnt = $pdo->prepare($sql);
    $stmnt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ]);

    return $stmnt->rowCount() > 0;
}

function getMessages(PDO $pdo): array {
    $sql = "SELECT * FROM messages ORDER BY created_at DESC";
    $stmnt = $pdo->query($sql);
    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}