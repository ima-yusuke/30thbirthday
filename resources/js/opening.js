const body = document.getElementById('body');

// オープニング画面
const OPENING_SECTION = document.getElementById('opening');
const OPENING_ELEMENTS = document.getElementsByClassName('top-text');
const BUTTON = document.getElementById("open-birthday");

//テキスト画面
const LOADING_TEXT_CONTAINER = document.getElementById('loading_container')
const LOADING_TEXT = document.querySelector('#loading_container h1');

// 画像画面
const IMAGES_CONTAINER = document.getElementById('img_container');
const IMAGES = document.getElementsByClassName('flower');
const BG_WATER = document.getElementById('bg_water');

body.style.overflow = 'hidden';

for (let i = 0; i < IMAGES.length; i++) {
    IMAGES[i].style.position = 'absolute';
    if(i==0){
        IMAGES[i].style.top = '50%';
        IMAGES[i].style.left = '50%';
        IMAGES[i].style.transform = 'translate(-50%, -50%)'; // 中央に揃える
    }else {
        IMAGES[i].style.top = Math.floor(Math.random() * 100) + 'vh';
        if(i%2==0){
            IMAGES[i].style.right = Math.floor(Math.random() * 100) + 'px';
        }else{
            IMAGES[i].style.left = Math.floor(Math.random() * -100) + 'px';
        }
    }
}

BUTTON.addEventListener('click', function() {

    // オープニング画面のフェードアウト
    body.style.overflow = 'auto';
    OPENING_SECTION.classList.add('fade-out');
    LOADING_TEXT_CONTAINER.classList.add('fade-in');

    // テキスト画面のフェードイン
    setTimeout(function() {
        OPENING_SECTION.classList.add('hide');

        LOADING_TEXT.style.transition = 'opacity 1s ease-in-out';
        LOADING_TEXT.style.opacity = '1'; // 段階的に表示

        // テキスト画面のフェードアウト
        setTimeout(function() {
            LOADING_TEXT.style.transition = 'opacity 0.5s ease-out';
            LOADING_TEXT.style.opacity = 0; // 段階的に表示
            IMAGES_CONTAINER.classList.remove('hide');

            // 画像画面のフェードイン
            setTimeout(function() {
                const showImagesInOrder = (images, delay) => {
                    images.forEach((image, index) => {
                        if(index!==0) {
                            setTimeout(() => {
                                image.style.transition = 'opacity 1s ease-in-out';
                                image.style.opacity = 1; // 段階的に表示
                            }, index * delay); // 各画像に遅延を適用
                        }
                    });
                };

                showImagesInOrder(Array.from(IMAGES), 300); // 500ms ごとに次の画像を表示

                setTimeout(function() {
                    IMAGES[0].classList.remove('hide');
                    IMAGES[0].style.transition = 'opacity 1s ease-in-out';
                    IMAGES[0].style.opacity = 1; // 段階的に表示
                    BG_WATER.classList.remove('hide');
                    setTimeout(function() {
                        HideImages();
                        setTimeout(function() {
                            window.location.href = "/birthday";
                        }, 2600);
                    },2000);
                }, 6500);
            },1000);
        },2000);
    },1000);
});

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function() {
        for(let i = 0; i < OPENING_ELEMENTS.length; i++) {
            OPENING_ELEMENTS[i].classList.remove('hidden');
            OPENING_ELEMENTS[i].classList.add('fade-in-element');
        }
    }, 1000); // 1秒後にアニメーション開始
});

function HideImages(){

    // 画面の中心座標
    const screenCenterX = window.innerWidth / 2;
    const screenCenterY = window.innerHeight / 2;

    // 画面の端座標
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;


    for (let i = 0; i < IMAGES.length; i++) {
        const rect = IMAGES[i].getBoundingClientRect();
        const imgX = rect.left + rect.width / 2;
        const imgY = rect.top + rect.height / 2;

        // 判定して移動させる
        if (imgX > screenCenterX && imgY > screenCenterY) {
            // 右下（'xが正、yが正'）
            IMAGES[i].style.transition = 'all 3s ease';
            IMAGES[i].style.left = screenWidth - rect.width / 2 + 'px';
            IMAGES[i].style.top = screenHeight - rect.height / 2 + 'px';
            IMAGES[i].style.transform = 'translate(50%, 50%)';
        } else if (imgX > screenCenterX && imgY < screenCenterY) {
            // 右上（'xが正、yが負'）
            IMAGES[i].style.transition = 'all 3s ease';
            IMAGES[i].style.left = screenWidth - rect.width / 2 + 'px';
            IMAGES[i].style.top = -rect.height / 2 + 'px';
            IMAGES[i].style.transform = 'translate(50%, -50%)';
        } else if (imgX < screenCenterX && imgY > screenCenterY) {
            // 左下（'xが負、yが正'）
            IMAGES[i].style.transition = 'all 3s ease';
            IMAGES[i].style.left = -rect.width / 2 + 'px';
            IMAGES[i].style.top = screenHeight - rect.height / 2 + 'px';
            IMAGES[i].style.transform = 'translate(-50%, 50%)';
        } else if (imgX < screenCenterX && imgY < screenCenterY) {
            // 左上（'xが負、yが負'）
            IMAGES[i].style.transition = 'all 3s ease';
            IMAGES[i].style.left = -rect.width / 2 + 'px';
            IMAGES[i].style.top = -rect.height / 2 + 'px';
            IMAGES[i].style.transform = 'translate(-50%, -50%)';
        }
    }

}

