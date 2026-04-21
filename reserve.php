<?php
include(__DIR__ . "/includes/header.php");
?>

<main>
  <section class="form-page container">
    <h2>ご予約</h2>
    <div class="content">
      <h3>注意事項</h3>
      <p class="separator-bottom">ウェブでのご予約は前日までにお願いいたします。<br>ご予約可能時間は20時までとなります。
      </p>

      <form method="post" action="reserve_send.php">
        <label for="name">お名前
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <input id="name" name="name" type="text" maxlength="50" required>
        </label>

        <label for="people">人数
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <div class="select-wrapper">
            <select id="people" name="people" required>
              <option value="">選択してください</option>
              <option value="1">1名</option>
              <option value="2">2名</option>
              <option value="3">3名</option>
              <option value="4">4名</option>
              <option value="5">5名</option>
              <option value="6">6名</option>
            </select>
          </div>
        </label>

        <label for="date">ご希望日
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <input id="date" name="date" type="date" required>
        </label>

        <label for="time">ご希望時間帯
          <span class="required" aria-hidden="true"></span>
          <span class="visually-hidden">必須</span>
          <div class="select-wrapper">
            <select id="time" name="time" required>
              <option value="">選択してください</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
            </select>
          </div>
        </label>

        <label for="memo">その他ご要望
          <textarea id="memo" name="memo" maxlength="300"></textarea>
        </label>

        <button type="submit">予約を申し込む</button>
      </form>
    </div>
  </section>
</main>

<?php include(__DIR__ . "/includes/footer.php"); ?>