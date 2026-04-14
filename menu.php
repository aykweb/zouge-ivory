<?php
include(__DIR__ . "/includes/header.php");
?>

<main>
  <section class="menu-page container">
    <h2>お品書き</h2>
    <div class="menu-wrapper">
      <div class="menu-tab">
        <button class="tab-btn is-active" data-tab="lunch" type="button"><span>ランチ</span></button>

        <button class="tab-btn" data-tab="dinner" type="button"><span>ディナー</span></button>
      </div>

      <div class="content tab-content" id="lunch">
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/manzoku_v1.webp" class="glightbox">
              <picture>
                <source srcset="/images/manzoku_v1.webp" media="(min-width: 768px)">
                <img src="/images/sp_manzoku_v1.webp" alt="定番にゅうめんと焼きおにぎりとおかずのセット">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>ランチ定食</h3>
            <p class="menu-item__cap">焼きおにぎり、季節の漬物、日替わり小鉢のセット</p>
            <p class="menu-item__price">700円<span class="menu-item__subcap">（にゅうめん大盛り +50円）</span></p>
          </div>
        </article>
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/teiban.webp" class="glightbox">
              <picture>
                <source srcset="/images/teiban.webp" media="(min-width: 768px)">
                <img src="/images/sp_teiban.webp" alt="薬味がたっぷり載っているにゅうめん">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>定番にゅうめん</h3>
            <p class="menu-item__cap">滋味豊かな定番の味</p>
            <p class="menu-item__price">500円<span class="menu-item__subcap">（大盛り +50円）</span></p>
          </div>
        </article>
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/season_numen.webp" class="glightbox">
              <picture>
                <source srcset="/images/season_numen.webp" media="(min-width: 768px)">
                <img src="/images/sp_season_numen.webp" alt="すだちのスライスが一面に載っているにゅうめん">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>時季限定にゅうめん</h3>
            <p class="menu-item__cap">あごだしすだちにゅうめん</p>
            <p class="menu-item__price">600円<span class="menu-item__subcap">（大盛り +50円）</span></p>
          </div>
        </article>

        <section class="drink-menu">
          <h3>ドリンク</h3>
          <ul class="drink-card">
            <li>グリーンルイボスティー （HOT / ICE）</li>
            <li>とうもろこし茶 （HOT / ICE）</li>
            <li>凍頂烏龍茶 （HOT / ICE）</li>
            <li>蓮茶 （HOT / ICE）</li>
            <li>豆乳 （HOT / ICE）</li>
            <li>ティーソーダ</li>
            <li>トマトソーダ</li>
          </ul>
        </section>
      </div>

      <div class="content tab-content" id="dinner" hidden>
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/manzoku_v1.webp" class="glightbox">
              <picture>
                <source srcset="/images/manzoku_v1.webp" media="(min-width: 768px)">
                <img src="/images/sp_manzoku_v1.webp" alt="定番にゅうめんと焼きおにぎりとおかずのセット">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>ディナー定食</h3>
            <p class="menu-item__cap">焼きおにぎり、季節の漬物、汁物のセット</p>
            <p class="menu-item__price">800円<span class="menu-item__subcap">（にゅうめん大盛り +50円）</span></p>
          </div>
        </article>
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/teiban.webp" class="glightbox">
              <picture>
                <source srcset="/images/teiban.webp" media="(min-width: 768px)">
                <img src="/images/sp_teiban.webp" alt="薬味がたっぷり載っているにゅうめん">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>定番にゅうめん</h3>
            <p class="menu-item__cap">滋味豊かな定番の味</p>
            <p class="menu-item__price">500円<span class="menu-item__subcap">（大盛り +50円）</span></p>
          </div>
        </article>
        <article class="menu-card">
          <div class="menu-pic">
            <a href="/images/season_numen.webp" class="glightbox">
              <picture>
                <source srcset="/images/season_numen.webp" media="(min-width: 768px)">
                <img src="/images/sp_season_numen.webp" alt="すだちのスライスが一面に載っているにゅうめん">
              </picture>
            </a>
          </div>
          <div class="menu-item">
            <h3>時季限定にゅうめん</h3>
            <p class="menu-item__cap">あごだしすだちにゅうめん</p>
            <p class="menu-item__price">600円<span class="menu-item__subcap">（大盛り +50円）</span></p>
          </div>
        </article>

        <section class="drink-menu">
          <h3>ドリンク</h3>
          <ul class="drink-card">
            <li>グリーンルイボスティー （HOT / ICE）</li>
            <li>とうもろこし茶 （HOT / ICE）</li>
            <li>凍頂烏龍茶 （HOT / ICE）</li>
            <li>蓮茶 （HOT / ICE）</li>
            <li>豆乳 （HOT / ICE）</li>
            <li>ティーソーダ</li>
            <li>トマトソーダ</li>
            <li>ビール（小瓶）</li>
            <li>蓮茶ハイボール</li>
          </ul>
        </section>
      </div>
    </div>
  </section>
</main>

<?php include(__DIR__ . "/includes/footer.php"); ?>