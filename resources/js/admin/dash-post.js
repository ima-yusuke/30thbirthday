
const ADD_BUTTON = document.getElementById("add_post_btn");//新規登録ボタン
const EDIT_BUTTONS = document.querySelectorAll('.editBtn');//編集ボタン
const DELETE_BUTTONS = document.querySelectorAll('.deleteBtn');//削除ボタン
const FORM_ELEMENT = document.getElementById('post_form');//新規登録form

EDIT_BUTTONS.forEach((btn,idx) => {
    btn.addEventListener('click', function() {

        let selectedAccordion = btn.parentNode.parentNode.parentNode.nextElementSibling;//アコーディオン中身

        ToggleAccordion(selectedAccordion, btn);
    });
});

// アコーディオン開閉
function ToggleAccordion(selectedAccordion, btn) {
    if (selectedAccordion.classList.contains('visible')) {
        selectedAccordion.classList.remove('visible');
        btn.innerHTML = "<i class=\"fa-solid fa-plus\"></i>";
    } else {
        // すべてのアコーディオンを閉じる
        document.querySelectorAll('.qa__body').forEach(content => {
            content.classList.remove('visible');
        });

        // すべてのボタンのテキストをリセット
        EDIT_BUTTONS.forEach(button => {
            button.innerHTML = "<i class=\"fa-solid fa-plus\"></i>";
        });

        // 選択されたアコーディオンを開く
        selectedAccordion.classList.add('visible');
        btn.innerHTML = "<i class=\"fa-solid fa-minus\"></i>";
    }
}

//[ADD]投稿追加
if(ADD_BUTTON!==null){
    ADD_BUTTON.addEventListener('click', function() {
        const formData = new FormData(FORM_ELEMENT);
        const imgInput1 = document.getElementById('img_1');
        const imgInput2 = document.getElementById('img_2');
        const titleInput = document.getElementById('title');
        const textInput = document.getElementById('text');
        const dateInput = document.getElementById('date');


        // バリデーション
        if (!imgInput1.files.length) {
            alert('サムネ画像を選択してください。');
            return;
        }

        // バリデーション
        if (!imgInput2.files.length) {
            alert('サブ画像を選択してください。');
            return;
        }

        // バリデーション
        if (titleInput.value.trim() === "") {
            alert('投稿名を入力してください。');
            return;
        }

        // バリデーション
        if (textInput.value.trim() === "") {
            alert('コンテンツを入力してください。');
            return;
        }

        // バリデーション
        if (dateInput.value.trim() === "") {
            alert('日付を選択してください。');
            return;
        }

        FetchData('/dashboard/post', 'POST',null, formData)
            .then(data => {
                alert(data.message);
                window.location.href = data.redirect;
            })
            .catch(error => {
                alert(error.message);
            });
    });
}

//[UPDATE]投稿更新
document.querySelectorAll('.update-btn').forEach((btn) => {
    btn.addEventListener('click', function() {
        const ID = btn.getAttribute('data-post-id');
        const FORM_ELEMENTS = btn.closest('.postForm');
        const FORM_DATA = new FormData(FORM_ELEMENTS);

        // バリデーション
        if(FORM_DATA.get('title').trim() === ""){
            alert('投稿名を入力してください');
            return;
        }

        if(FORM_DATA.get('text').trim() === ""){
            alert('コンテンツを入力してください');
            return;
        }

        FetchData(`/dashboard/post/${ID}`, 'POST',null, FORM_DATA)
            .then(data => {
                alert(data.message);
                window.location.href = data.redirect;
            })
            .catch(error => {
                alert(error.message);
            });
    });
});

//[DELETE]投稿削除
for (let i = 0; i < DELETE_BUTTONS.length; i++) {
    DELETE_BUTTONS[i].addEventListener('click', function () {
        DeletePost(DELETE_BUTTONS[i]);
    });
}

function DeletePost(btn) {
    let id = btn.getAttribute('data-post-id');

    // 確認ダイアログを表示し、ユーザーがOKを押した場合のみ削除処理を実行
    if (confirm('本当に削除しますか？')) {

        // Ajaxリクエストを送信して削除処理を行う
        FetchData('/dashboard/post', 'DELETE',true,JSON.stringify({ id: id }))
            .then(data => {
                alert(data.message);
                window.location.href = data.redirect;
            })
            .catch(error => {
                console.error('削除に失敗しました:', error);
            });
    }
}


function FetchData(url,method,headerData,bodyData) {

    const headers = {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };

    // headerDataがtrueであれば、既存のheadersにマージする
    if (headerData) {
        Object.assign(headers, {
            'Content-Type': 'application/json'
        });
    }

    return fetch(url, {
        method: method,
        headers: headers,
        body: bodyData
    })
        .then(response => {
            return response.json();
        })
        .catch(error => {
            console.error('Error:', error);
            throw new Error(error.message);
        });
}

