<?php $pageMap = [
  "index.php" => "あたたかいそうめん専門店",
  "menu.php" => "お品書き",
  "info.php" => "店舗情報",
  "about.php" => "こだわり",
  "reserve.php" => "ご予約",
  "contact.php" => "お問い合わせ",

  "reserve_complete.php" => "受付完了｜ご予約",
  "contact_complete.php" => "送信完了｜お問い合わせ",

  "bike-parking.php" => "駐輪場のご案内｜お知らせ",
  "stamp-2509.php" => "9月の営業日とスタンプ2倍の日｜お知らせ",
  "stamp-2510.php" => "10月の営業日とスタンプ2倍の日｜お知らせ",
  "stamp-2511.php" => "11月の営業日とスタンプ2倍の日｜お知らせ",
  "start-reservation.php" => "ウェブでのご予約が可能になりました｜お知らせ",
];
$currentFile = basename($_SERVER['PHP_SELF']);
$pageTitle = $pageTitle ?? ($pageMap[$currentFile] ?? "にゅうめんや 象牙");
$pageClass = $pageClass ?? "";
$pageDescription = $pageDescription ?? "東小金井駅から徒歩3分。「にゅうめんや 象牙」はあたたかいそうめん料理の専門店です。ラインナップはシンプルに。料理は具だくさんで滋味に富んでいます。"
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if ($currentFile === 'index.php'): ?>
    <title>にゅうめんや 象牙｜<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <?php else: ?>
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>｜にゅうめんや 象牙</title>
  <?php endif; ?>
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
  <link rel="icon" type="image/svg+xml" href="/images/favicon/favicon.svg">

  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="robots" content="noindex, nofollow">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>


<body class="<?= htmlspecialchars($pageClass ?? '') ?>">
  <header class="<?= $currentFile === 'index.php' ? 'is-initial' : '' ?>">
    <div class="header-inner container">
      <h1>
        <a href="/index.php" class="titles">
          <picture class="sub-title">
            <source media="(min-width: 768px)" srcset="/images/pc_sub-title.svg">
            <source srcset="/images/sp_sub-title.svg">
            <img src="/images/sp_sub-title.svg" alt="にゅうめんや" width="85" height="12">
          </picture>

          <div class="main-title">
            <picture class="main-title__standard">
              <source media="(min-width: 768px)" srcset="/images/main-title.svg" class="main-title__standard">
              <img src="/images/main-title.svg" alt="象牙" width="70" height="31">
            </picture>

            <picture class="main-title__initial">
              <source media="(min-width: 768px)" srcset="/images/pc_initial-title.svg">
              <img src="/images/pc_initial-title.svg" alt="象牙" width="88" height="157">
            </picture>
          </div>
        </a>
      </h1>

      <div class="pc-menu">
        <nav>
          <ul>
            <li><a href="/about.php">
                <span class="ja">こだわり</span>
                <span class="en">About</span>
              </a></li>

            <li><a href="/menu.php">
                <span class="ja">お品書き</span>
                <span class="en">Menu</span>
              </a></li>

            <li><a href="/info.php">
                <span class="ja">店舗情報</span>
                <span class="en">Info</span>
              </a></li>

            <li><a href="/reserve.php">
                <span class="ja">ご予約</span>
                <span class="en">Reserve</span>
              </a></li>
          </ul>
        </nav>
      </div>

      <div id="menu-trigger" class="menu-btn" aria-expanded="false" aria-controls="overlay">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="overlay">
      <nav>
        <ul>
          <li style="--i: 0"><a href="/index.php">Top</a></li>
          <li style="--i: 1"><a href="/about.php">About</a></li>
          <li style="--i: 2"><a href="/menu.php">Menu</a></li>
          <li style="--i: 3"><a href="/info.php">Info</a></li>
          <li style="--i: 4"><a href="/reserve.php">Reserve</a></li>
          <li style="--i: 5"><a href="/contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>