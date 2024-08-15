import { PageFlip } from 'page-flip';
const HAMBURGER_ICON = document.getElementById('hamburger_icon');
const CLOSE_ICON = document.getElementById('close_icon');
let side_menu = document.getElementsByClassName("side_menu_off")[0];
let main = document.getElementsByTagName("body")[0];

//サイドメニュー表示
HAMBURGER_ICON.addEventListener('click', function() {

    HAMBURGER_ICON.classList.add("hidden")
    CLOSE_ICON.classList.remove("hidden")

    // サイドメニュー表示
    side_menu.classList.remove("side_menu_off")
    side_menu.classList.add("side_menu_show")

    // mainをスクロール不可に
    main.classList.add("scroll_none")
})

// メニューのいずれかもしくは✗クリック時に画面グレー&サイドメニュー非表示
let side_li = document.getElementsByClassName("side_li");
for(let i= 0; i<side_li.length;i++){
    side_li[i].addEventListener("click",function (e){

        side_menu.classList.remove("side_menu_show")
        side_menu.classList.add("side_menu_off")

        HAMBURGER_ICON.classList.remove("hidden")
        CLOSE_ICON.classList.add("hidden")

        main.classList.remove("scroll_none")
    })
}

// サイドメニューの外をクリックしたらサイドメニュー閉じる
document.addEventListener("click",function (e){
    if((!e.target.closest('div.side_wrapper'))&& e.target!==HAMBURGER_ICON) {

        side_menu.classList.remove("side_menu_show")
        side_menu.classList.add("side_menu_off")

        HAMBURGER_ICON.classList.remove("hidden")
        CLOSE_ICON.classList.add("hidden")

        main.classList.remove("scroll_none")
    }
})

// const bookElement = document.getElementById('book');
// const pageFlip = new PageFlip(bookElement, {
//     width: bookElement.offsetWidth, // 初期幅を動的に設定
//     height: bookElement.offsetHeight, // 初期高さを動的に設定
//     showCover: true,
//     maxShadowOpacity: 0.5,
//     useMouseEvents: false,
//     flippingTime: 3000,
// });
//
// pageFlip.loadFromHTML(document.querySelectorAll('.my-page'));
// // ページをクリックしたときにページをめくるイベントリスナーを追加
// document.getElementById('book').addEventListener('click', (event) => {
//     // クリックした位置によってページを進めるか戻すかを決定
//     const bookWidth = document.getElementById('book').offsetWidth;
//     const clickX = event.clientX;
//
//     if (clickX > bookWidth / 2) {
//         // 右側をクリックした場合、次のページに進む
//         pageFlip.flipNext();
//     } else {
//         // 左側をクリックした場合、前のページに戻る
//         pageFlip.flipPrev();
//     }
// });
