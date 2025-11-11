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

    // トップページ判定（GitHub Pages のサブパス対応）
    // location.pathname: /リポジトリ名/ または /リポジトリ名/index.html
    const path = location.pathname;
    const repoName = "/zouge-ivory"; // ←ここを自分のリポジトリ名に書き換える
    const isTop =
      path === "/" ||
      path === `${repoName}/` ||
      path.endsWith("index.html");
    if (!isTop) return;

    const siteTitle = document.querySelector(".site-title");
    const header = document.querySelector(".header--top");
    const heroBg = document.querySelector(".hero-bg");

    if (!heroBg || !siteTitle || !header) {
      console.warn("必要な要素が取得できませんでした");
      return;
    }

    let observer;

    // Observer初期化関数
    function initObserver() {
      if (observer) observer.disconnect();

      observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) {
              siteTitle.classList.add("fade-out");
              header.classList.add("scrolled");
            } else {
              siteTitle.classList.remove("fade-out");
              header.classList.remove("scrolled");
            }
          });
        },
        { threshold: 0 }
      );

      observer.observe(heroBg);
    }

    // リサイズ判定
    function handleResize() {
      if (window.innerWidth >= 768) {
        initObserver();
      } else if (observer) {
        observer.disconnect();
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
}
