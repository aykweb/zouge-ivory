<?php
include(__DIR__ . "/includes/header.php");
?>

<main>
  <section class="form-page container">
    <h2>お問い合わせ</h2>
    <div class="content">
      <h3>注意事項</h3>
      <p class="separator-bottom">
        お問い合わせのご返信には２〜３営業日いただきます。<br>
        ご予約は<a class="text-link" href="/reserve.php">こちらから</a>受付しております。
      </p>
      
      <form>
        <label for="name">お名前
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <input id="name" type="text" maxlength="50" required>
        </label>

        <label for="email">メールアドレス
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <input id="email" type="email" maxlength="254" required>
        </label>

        <p class="note">当店からのご連絡が可能なメールアドレスをご入力ください。</p>

        <label for="tel">電話番号
          <input id="tel" type="tel" maxlength="20">
        </label>

        <label for="subject">件名
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <input id="subject" type="text" maxlength="100" required>
        </label>

        <label for="message">お問い合わせ内容
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <textarea id="message" required></textarea>
        </label>

        <button type="submit">送信する</button>
      </form>
    </div>
  </section>
</main>

<?php include(__DIR__ . "/includes/footer.php"); ?>