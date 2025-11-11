"use strict";

{
  // overlay を表示するために関係のある要素を取得
  const open = document.getElementById("open");
  const overlay = document.querySelector(".overlay");
  const close = document.getElementById("close");

  // open をクリックしたら、次の処理をする
  open.addEventListener("click", () => {
    // 「.overlay」に「.show」を追加
    overlay.classList.add("show");

    // 「.open」に「.hide」を追加
    open.classList.add("hide");
  });

  // close をクリックしたら、次の処理をする
  close.addEventListener("click", () => {
    // 「.overlay」から「.show」を解除
    overlay.classList.remove("show");

    // 「.open」から「.hide」を解除
    open.classList.remove("hide");
  });

  // PC版トップページのスクロール制御を行う関数
  function setupPcScrollEffect() {
    // 既存の監視があれば停止するため、まず要素を取得
    const siteTitle = document.querySelector(".site-title");
    const header = document.querySelector(".header--top");

    // 1. SP版（768px未満）であれば、PC向けのスタイルを解除して処理を終了
    if (window.innerWidth < 768) {
      if (siteTitle) siteTitle.classList.remove("fade-out");
      if (header) header.classList.remove("scrolled");
      // ここで監視を停止する処理を入れることもできますが、
      // 簡単のため今回は simply return します。
      return; 
    }
    
    // トップページのみ実行 (PC版768px以上)
    if (location.pathname !== "/" && !location.pathname.endsWith("index.html"))
      return;
    
    // 2. PC版の要素を取得
    const heroBg = document.querySelector(".hero-bg");

    if (!heroBg || !siteTitle || !header) return; // 要素が存在しなければ終了

    // 3. Intersection Observerのセットアップ
    // (既に監視が設定されている場合もあるため、この関数が何度も実行されても安全なように実装します)

    // スクロール位置をリロード時に復元しないようにする（これは一度で良いですが、入れておいても問題なし）
    window.history.scrollRestoration = "manual";
    
    // Intersection Observerを設定
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          // PC幅でのみ処理
          if (window.innerWidth >= 768) {
            if (!entry.isIntersecting) {
              siteTitle.classList.add("fade-out");
              header.classList.add("scrolled");
            } else {
              siteTitle.classList.remove("fade-out");
              header.classList.remove("scrolled");
              // PCビューでヒーローエリア内にいる場合、fade-out を確実に解除
            }
          }
        });
      },
      {threshold: 0}
    );
    
    // 既に監視中かどうかをチェックする仕組みはありませんが、単純にobserveを呼び出します。
    // より厳密には、前回の observer を格納し、observer.unobserve(heroBg) を実行してから
    // 新しい observer を設定するのがベストです。
    observer.observe(heroBg);
  }

  // 実行タイミング 1: ページ読み込み完了時
  document.addEventListener("DOMContentLoaded", function () {
    // スムーススクロールなどの共通処理
    window.scrollTo(0, 0);

    setupPcScrollEffect();
  });
  
  // 実行タイミング 2: ウィンドウサイズ変更時
  window.addEventListener('resize', () => {
      // 頻繁な実行を避けるため、一定時間後に実行する (デバウンス) のが理想ですが、
      // ポートフォリオ用途では簡潔に setupPcScrollEffect を呼び出します。
      setupPcScrollEffect();
  });


  document.addEventListener("DOMContentLoaded", () => {
    const toTop = document.querySelector(".to-top");

    // 最初は非表示
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

    // スムーススクロール
    toTop.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  });
}
