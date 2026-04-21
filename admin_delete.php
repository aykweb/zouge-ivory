<?php
require(__DIR__ . '/db.php');

$id = (int)($_POST['id'] ?? 0);

if ($id > 0) {
  $stmt = $pdo->prepare("DELETE FROM reservations WHERE id = ?");
  $stmt->execute([$id]);
}

header('Location: admin.php');
exit;