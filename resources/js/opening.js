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
                        setTimeout(() => {
                            image.style.transition = 'opacity 1s ease-in-out';
                            image.style.opacity = 1; // 段階的に表示
                        }, index * delay); // 各画像に遅延を適用
                    });
                };

                showImagesInOrder(Array.from(IMAGES), 300); // 500ms ごとに次の画像を表示
                setTimeout(function() {
                    window.location.href = "/birthday";

                }, 7000);
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

