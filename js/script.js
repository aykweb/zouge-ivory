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

  document.addEventListener("DOMContentLoaded", function () {
    // スクロール位置をリロード時に復元しない
    window.history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    // トップページ判定（GitHub Pages サブパス対応）
    const path = location.pathname;
    const repoName = "/リポジトリ名"; // ←自分のリポジトリ名に書き換える
    const isTop =
      path === "/" ||
      path === `${repoName}/` ||
      path.endsWith("index.html");
    if (!isTop) return;

    const siteTitle = document.querySelector(".site-title");
    const header = document.querySelector(".header--top");
    const heroBg = document.querySelector(".hero-bg");

    if (!siteTitle || !header || !heroBg) {
      console.warn("必要な要素が取得できませんでした");
      return;
    }

    let observer; // IntersectionObserver は不要になりましたが保持する場合

    // H1下端基準フェードアウト処理
    function handleScrollFade() {
      const siteRect = siteTitle.getBoundingClientRect();
      const heroRect = heroBg.getBoundingClientRect();

      // siteTitle の下端が heroBg の下端に触れたらフェードアウト
      if (siteRect.bottom <= heroRect.bottom) {
        siteTitle.classList.add("fade-out");
        header.classList.add("scrolled");
      } else {
        siteTitle.classList.remove("fade-out");
        header.classList.remove("scrolled");
      }
    }

    // リサイズ判定
    function handleResize() {
      if
