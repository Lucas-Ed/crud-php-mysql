<?php

require 'db.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID inválido");
}

$stmt = $pdo->prepare(
    "DELETE FROM pessoas WHERE id = ?"
);

$stmt->execute([$id]);

header("Location: index.php");
exit;