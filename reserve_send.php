<?php
require(__DIR__ . '/db.php');

// バリデーション
$errors = [];

$name = trim($_POST['name'] ?? '');
$people = (int)($_POST['people'] ?? 0);
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$memo = trim($_POST['memo'] ?? '');

if ($name === '') $errors[] = 'お名前を入力してください。';
if ($people < 1 || $people > 6) $errors[] = '人数を選択してください。';
if ($date === '') $errors[] = 'ご希望日を入力してください。';
if ($time === '') $errors[] = 'ご希望時間を選択してください。';

if (!empty($errors)) {
    // エラーがあればフォームに戻す
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: reserve.php');
    exit;
}

// データベースに保存
$stmt = $pdo->prepare("INSERT INTO reservations (name, people, date, time, memo, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->execute([$name, $people, $date, $time, $memo]);

// 完了ページへ
header('Location: reserve_complete.php');
exit;