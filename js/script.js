"use strict";

{
  // overlay 関連
  const open = document.getElementById("open");
  const overlay = document.querySelector(".overlay");
  const close = document.getElementById("close");

  open.addEventListener("click", () => {
    overlay.classList.add("show");
    open.classList.add("hide");
  });

  close.addEventListener("click", () => {
    overlay.classList.remove("show");
    open.classList.remove("hide");
  });

  window.addEventListener("load", function () {
    // スクロール位置をリロード時に復元しない
    window.history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    // トップページ判定（GitHub Pages 対応）
    const path = location.pathname;
    const isTop = path.endsWith("/") || path.endsWith("index.html");
    if (!isTop) return;

    const siteTitle = document.querySelector(".site-title");
    const header = document.querySelector(".header--top");
    const heroBg = document.querySelector(".hero-bg");

    if (!siteTitle || !header || !heroBg) {
      console.warn("必要な要素が取得できませんでした");
      return;
    }

    // フェードアウト判定関数
    function handleScrollFade() {
      const heroBottom = heroBg.getBoundingClientRect().bottom + window.scrollY;
      const titleBottom = siteTitle.offsetTop + siteTitle.offsetHeight + window.scrollY;

      if (titleBottom >= heroBottom) {
        siteTitle.classList.add("fade-out");
        header.classList.add("scrolled");
      } else {
        siteTitle.classList.remove("fade-out");
        header.classList.remove("scrolled");
      }
    }

    // リサイズ判定
    function handleResize() {
      if (window.innerWidth >= 768) {
        // PC版ならスクロールイベント登録
        window.addEventListener("scroll", handleScrollFade);
        handleScrollFade(); // 初回判定
      } else {
        // モバイル版では解除
        window.removeEventListener("scroll", handleScrollFade);
        siteTitle.classList.remove("fade-out");
        header.classList.remove("scrolled");
      }
    }

    // 初期化
    handleResize();
    window.addEventListener("resize", handleResize);

    // to-topボタン
    const toTop = document.querySelector(".to-top");
    if (toTop) {
      toTop.style.opacity = "0";
      toTop.style.pointerEvents = "none";
      toTop.style.transition = "opacity 0.3s ease-in-out";

      window.addEventListener("scroll", () => {
        if (window.scrollY > window.innerHeight / 2) {
          toTop.style.opacity = "1";
          toTop.style.pointerEvents = "auto";
        } else {
          toTop.style.opacity = "0";
          toTop.style.pointerEvents = "none";
        }
      });

      toTop.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    }
  });
