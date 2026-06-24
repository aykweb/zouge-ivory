"use strict";

{
  // --- 共通（sp）：ハンバーガー開閉 ---
  const trigger = document.querySelector("#menu-trigger");
  const overlay = document.querySelector(".overlay");
  const body = document.querySelector("body");


  if (trigger && overlay) {
    trigger.addEventListener('click', () => {
      trigger.classList.toggle('is-active');
      overlay.classList.toggle('show');
      body.classList.toggle('is-menu-open');
      const isOpen = overlay.classList.contains('show');
      trigger.setAttribute('aria-expanded', isOpen);
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    // --- 共通：スクロール設定とto-top ---
    window.history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    // --- トップページ：サイトロゴのリンク無効 ---
    const logoLink = document.querySelector('.top-page .titles');
    if (logoLink) {
      logoLink.setAttribute('tabindex', '-1');
      logoLink.addEventListener('click', (e) => {
        e.preventDefault();
      });
    }



    // --- メニューページ：タブ切り替え ---
    const tabBtns = document.querySelectorAll(".tab-btn");
    const lunch = document.querySelector("#lunch");
    const dinner = document.querySelector("#dinner");
    const tabContents = document.querySelectorAll(".tab-content");

    tabBtns.forEach((clickedTab) => {
      clickedTab.addEventListener("click", () => {
        tabBtns.forEach((tabBtn) => {
          tabBtn.classList.remove("is-active");
        });
        clickedTab.classList.add("is-active");

        tabContents.forEach((tabContent) => {
          tabContent.hidden = true;
        });
        document.getElementById(clickedTab.dataset.tab).hidden = false;
      });
    });

    // --- メニューページ：glightbox 呼び出し ---
    if (document.querySelector('.glightbox')) {
      GLightbox({ selector: '.glightbox' });
    }

    // --- 予約ページ：カレンダー ---
    const dateInput = document.getElementById('date');
    if (dateInput) {
      const today = new Date();
      const jst = new Date(today.getTime() + (9 + 24) * 60 * 60 * 1000);
      const todayStr = jst.toISOString().split('T')[0];
      dateInput.setAttribute('min', todayStr);

      dateInput.addEventListener('change', function () {
        const selected = new Date(this.value);
        if (selected.getDay() === 0) {
          alert('日曜日は定休日です');
          this.value = '';
        }
      });
    }

    // --- トップページ（pc）：ヘッダー切替 ---
    const header = document.querySelector(".top-page header");
    if (!header) return;

    function handleScroll() {
      if (window.innerWidth >= 768 && window.scrollY < 240) {
        header.classList.add("is-initial");
      } else {
        header.classList.remove("is-initial");
      }
    }

    // スクロール時と画面サイズ変更時に実行
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);
    // 初回読み込み時にも実行
    handleScroll();

    // --- 上端に戻るボタン ---
    const toTop = document.querySelector(".to-top");
    const footer = document.querySelector(".site-footer");

    if (toTop && footer) {
      window.addEventListener("scroll", () => {
        const isVisible = window.scrollY > window.innerHeight / 2;
        toTop.classList.toggle("is-visible", isVisible);
      });

      toTop.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    }


  });

}