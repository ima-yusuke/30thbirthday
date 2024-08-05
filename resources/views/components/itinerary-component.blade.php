<x-title-component color="about-orange" title="02.Itinerary" id="itinerary"></x-title-component>
<section class="border-4 border-solid border-about-orange px-2.5 py-6 md:p-6 mx-2 my-8 md:m-8">
    <article class="flex flex-col items-center gap-16">
        <div class="flex flex-col items-center gap-6">
            <h2 class="text-center text-6xl text-bold text-about-orange">DAY1</h2>
            <p class="border-b-2 border-solid border-about-orange w-[70px] my-1 text-center"></p>
        </div>
        <div class="md:ml-8">
            <x-itinerary-div time="09:00">
                <p>姫のピックアップ</p>
                <img src="{{asset("storage/img/peach.png")}}" class="rounded-lg w-[10vh] h-[10vh] md:w-[20vh] md:h-[20vh]">
            </x-itinerary-div>

            <x-itinerary-div time="09:15">
                <p><i class="fa-solid fa-car pr-2"></i>出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="11:15">
                <p>御在所SA到着</p>
                <p class="text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>昼食タイム（自由食）</p>
                <div class="flex gap-2">
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/ramen.jpg")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【開花屋】</p>
                    </aside>
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/takoyaki.jpg")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【たこ焼き】</p>
                    </aside>
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/pan.jpg")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【マジカル】</p>
                    </aside>
                </div>
                <a href="https://sapa.c-nexco.co.jp/sapa/shop?sapainfoid=60#panel" target="blank" class="text-blue-600">もっとご飯見る?</a>
            </x-itinerary-div>

            <x-itinerary-div time="12:00">
                <p>御在所SA出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="休憩">
                <p>良さげなSAがあったら寄ろう</p>
            </x-itinerary-div>

            <x-itinerary-div time="16:30">
                <p>HOUSE OF FINN JUHL HAKUBA</p>
                <p class="text-gray-600"><i class="fa-solid fa-pen pr-2"></i>チェックイン</p>
                <img src="{{asset("storage/img/finn-juhl.jpg")}}" class="rounded-lg w-[20vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
            </x-itinerary-div>

            <x-itinerary-div time="17:30">
                <p><i class="fa-solid fa-car pr-2"></i>夕食へ向けて出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="17:45">
                <p>蕎麦酒房 膳 到着</p>
                <p class="text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>夕食タイム（長野県名物そば）</p>
                <img src="{{asset("storage/img/zenn.jpg")}}" class="rounded-lg w-[20vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
                <a href="https://zen.artbi.net/" target="blank" class="text-blue-600">メニューはこちら</a>
            </x-itinerary-div>

            <x-itinerary-div time="18:45">
                <p>蕎麦酒房 膳 出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="18:55">
                <p>八方尾根ゴンドラリフト八方駅 到着</p>
                <p class="text-gray-600">ここで車とはいったんおさらば。</p>
                <a class="text-blue-600" href="https://www.happo-one.jp/access/parking/" target="blank">駐車場はここ</a>
            </x-itinerary-div>

            <x-itinerary-div time="19:00">
                <p><i class="fa-solid fa-star pr-2"></i>天空の天体ショーツアー</p>
                <ul class="text-gray-600 flex flex-col gap-2">
                    <li>■ 受付時間：19:00～19:30</li>
                    <li>■ 受付場所：八方尾根ゴンドラリフト八方駅 チケットセンター ゴンドラ乗車（上り）</li>
                    <li>■ 星空観察会：19:45～20:30</li>
                    <li>■ フリータイム：20:30～21:00</li>
                    <li>■ 解散：21:00～ ゴンドラで八方駅へ</li>
                    <li>※持ち物（必要に応じて）：虫よけスプレー、懐中電灯、敷物、羽織物</li>
                </ul>
                <img src="{{asset("storage/img/star.jpg")}}" class="rounded-lg w-[20vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
            </x-itinerary-div>

            <x-itinerary-div time="21:15">
                <p>HOUSE OF FINN JUHL HAKUBA 帰着</p>
                <p class="text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>秘密の夜食タイム</p>
            </x-itinerary-div>

            <x-itinerary-div time="24:00">
                <p>Happy Birthday</p>
                <p class="text-gray-600"><i class="fa-solid fa-gift pr-2"></i>ちょっとしたプレゼント</p>
            </x-itinerary-div>

            <div class="flex items-start">
                <div class="flex flex-col items-center">
                    <h2 class="rounded-md bg-black py-2 text-sm md:text-base text-gray-200 flex justify-center items-center relative w-[80px] md:w-[100px]">end</h2>
                </div>

                <aside class="text-sm md:text-base flex flex-col gap-5 ml-4 mt-2">
                    <p><i class="fa-solid fa-moon pr-2"></i>Good Night</p>
                </aside>
            </div>
        </div>
    </article>
</section>

<section class="border-4 border-solid border-about-orange px-2.5 py-6 md:p-6 mx-2 my-8 md:m-8">
    <article class="flex flex-col gap-16">
        <div class="flex flex-col items-center gap-6">
            <h2 class="text-center text-6xl text-bold text-about-orange">DAY2</h2>
            <p class="border-b-2 border-solid border-about-orange w-[70px] my-1 text-center"></p>
        </div>
        <div class="md:ml-8">
            <x-itinerary-div time="09:45">
                <p>HOUSE OF FINN JUHL HAKUBA 出発</p>
                <p class="pl-4 text-gray-600">朝ご飯...</p>
            </x-itinerary-div>

            <x-itinerary-div time="10:00">
                <p>白馬岩岳マウンテンリゾート 到着</p>
                <p class="text-gray-600">アルプスのハイジになれる？</p>
                <div class="flex gap-2">
                    <img src="{{asset("storage/img/hakuba.jpg")}}" class="rounded-lg w-[15vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
                    <img src="{{asset("storage/img/swing.jpg")}}" class="rounded-lg w-[15vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
                </div>
                <p class="text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>昼食タイム（自由食）</p>
                <div class="flex gap-1">
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/soup.jpg")}}" class="rounded-lg w-[15vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-gray-600">【オマール海老スープ】</p>
                    </aside>
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/ny.jpg")}}" class="rounded-lg w-[15vh] h-[10vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-gray-600">【シャレたご飯】</p>
                    </aside>
                </div>
                <a href="https://iwatake-mountain-resort.com/" target="blank" class="text-blue-600">施設詳細</a>
            </x-itinerary-div>

            <x-itinerary-div time="12:30">
                <p>白馬岩岳マウンテンリゾート 出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="休憩">
                <p>良さげなSAがあったら寄ろう</p>
            </x-itinerary-div>

            <x-itinerary-div time="17:00">
                <p>御在所SA到着</p>
                <p class="text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>夕食タイム（自由食）</p>
                <p class="text-gray-600">※行きとはお店は違うよ〜</p>
                <div class="flex gap-2">
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/chiken.png")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【名古屋コーチン】</p>
                    </aside>
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/udon.jpg")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【うどん】</p>
                    </aside>
                    <aside class="flex flex-col items-center gap-1">
                        <img src="{{asset("storage/img/onigiri.jpg")}}" class="rounded-lg w-[8vh] h-[8vh] md:w-[20vh] md:h-[20vh] object-cover">
                        <p class="text-xs text-center text-gray-600">【てんむす】</p>
                    </aside>
                </div>
                <a href="https://sapa.c-nexco.co.jp/sapa/shop?sapainfoid=61#panel" target="blank" class="text-blue-600">もっとご飯見る?</a>
            </x-itinerary-div>

            <x-itinerary-div time="18:00">
                <p>御在所SA出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="20:00">
                <p>ただいまちはちゃんハウス</p>
                <p class="text-gray-600"><i class="fa-solid fa-face-sad-cry pr-2"></i>涙のお別れ</p>
            </x-itinerary-div>

            <div class="flex items-start">
                <div class="flex flex-col items-center">
                    <h2 class="rounded-md bg-black py-2 text-sm md:text-base text-gray-200 flex justify-center items-center relative w-[80px] md:w-[100px]">end</h2>
                </div>

                <aside class="text-sm md:text-base flex flex-col gap-5 ml-4 mt-2">
                    <p><i class="fa-regular fa-heart pr-2"></i>Thank You</p>
                </aside>
            </div>
        </div>
    </article>
</section>
<script>
    // しおりの縦の点線
    let timeElements = document.getElementsByClassName("timeElement");
    let contents = document.getElementsByClassName("content");

    for (let i = 0; i < timeElements.length; i++) {
        let rect = timeElements[i].getBoundingClientRect();
        contents[i].style.marginTop = rect.height / 4 + "px";

        let contentSlotHeight = contents[i].offsetHeight;
        if (contentSlotHeight < 50){
            contentSlotHeight = 50;
        }
        document.getElementsByClassName('dot-line')[i].style.height = contentSlotHeight + 'px';
    }
</script>
