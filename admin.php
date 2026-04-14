<?php
require(__DIR__ . '/db.php');

$stmt = $pdo->query("SELECT * FROM reservations ORDER BY date ASC, time ASC");
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>予約管理</title>
  <style>
    body { font-family: sans-serif; padding: 2rem; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 0.5rem 1rem; text-align: left; }
    th { background: #f5f5f5; }
    tr:nth-child(even) { background: #fafafa; }
  </style>
</head>
<body>
  <h1>予約一覧</h1>
  <?php if (empty($reservations)): ?>
    <p>予約はまだありません。</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>お名前</th>
          <th>人数</th>
          <th>日付</th>
          <th>時間</th>
          <th>車椅子</th>
          <th>メモ</th>
          <th>受付日時</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($reservations as $r): ?>
          <tr>
            <td><?= htmlspecialchars($r['id']) ?></td>
            <td><?= htmlspecialchars($r['name']) ?></td>
            <td><?= htmlspecialchars($r['people']) ?>名</td>
            <td><?= htmlspecialchars($r['date']) ?></td>
            <td><?= htmlspecialchars($r['time']) ?></td>
            <td><?= $r['wheelchair'] ? 'あり' : 'なし' ?></td>
            <td><?= htmlspecialchars($r['memo']) ?></td>
            <td><?= htmlspecialchars($r['created_at']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</body>
</html>