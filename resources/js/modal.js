const BODY  = document.getElementById("body");
const ARTICLES = document.getElementsByClassName("open-modal");
const MODALS = document.getElementsByClassName("modal");
const CLOSE_BUTTONS_1 = document.getElementsByClassName("close-modal-1");
const CLOSE_BUTTONS_2 = document.getElementsByClassName("close-modal-2");

for(let i=0; i<ARTICLES.length; i++){
    // open Modal
    ARTICLES[i].addEventListener("click",function (){
        MODALS[i].classList.remove("hidden")
        let width = MODALS[i].offsetWidth
        CLOSE_BUTTONS_1[i].style.left = width + "px";
        BODY.classList.add("overflow-hidden")
    })

    // close Modal
    CLOSE_BUTTONS_1[i].addEventListener("click",function (){
        MODALS[i].classList.add("hidden")
        BODY.classList.remove("overflow-hidden")
    })

    // close Modal2
    CLOSE_BUTTONS_2[i].addEventListener("click",function (){
        MODALS[i].classList.add("hidden")
        BODY.classList.remove("overflow-hidden")
    })
}
