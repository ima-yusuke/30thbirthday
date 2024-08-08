let body = document.getElementById('body');
body.style.overflow = 'hidden';

const BUTTON = document.getElementById("open-birthday");

BUTTON.addEventListener('click', function() {
    body.style.overflow = 'auto';
    document.getElementById('opening').classList.add('fade-out');
    setTimeout(function() {
        document.getElementById('opening').classList.add('hide');
        document.getElementById('loading').classList.remove('hide');
        setTimeout(function() {
            window.location.href = "/birthday";
        }, 3000);
    },1000);


});

document.addEventListener('DOMContentLoaded', function () {
    const elements = document.getElementsByClassName('top-text');

    setTimeout(function() {
        for(let i = 0; i < elements.length; i++) {
            elements[i].classList.remove('hidden');
            elements[i].classList.add('fade-in-element');
        }
    }, 1000); // 1秒後にアニメーション開始
});

