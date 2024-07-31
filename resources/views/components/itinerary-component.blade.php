<section class="border-4 border-solid border-black p-6 m-8">
    <article class="flex flex-col gap-16">
        <h2 class="text-center text-6xl text-bold">DAY1</h2>
        <div class="ml-8">
            <x-itinerary-div time="09:00">
                <p><i class="fa-regular fa-chess-queen pr-2"></i>姫のピックアップ</p>
            </x-itinerary-div>

            <x-itinerary-div time="09:15">
                <p><i class="fa-solid fa-car pr-2"></i>出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="11:15">
                <p>御在所SA到着</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>昼食タイム</p>
            </x-itinerary-div>

            <x-itinerary-div time="12:00">
                <p>御在所SA出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="休憩">
                <p>良さげなSAがあったら寄ろう</p>
            </x-itinerary-div>

            <x-itinerary-div time="16:30">
                <p>HOUSE OF FINN JUHL HAKUBA</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-pen pr-2"></i>チェックイン</p>
            </x-itinerary-div>

            <x-itinerary-div time="17:30">
                <p><i class="fa-solid fa-car pr-2"></i>夕食へ向けて出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="17:45">
                <p>蕎麦酒房 膳 到着</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>夕食タイム（長野県名物そば）</p>
            </x-itinerary-div>

            <x-itinerary-div time="18:45">
                <p>蕎麦酒房 膳 出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="18:55">
                <p>八方尾根ゴンドラリフト八方駅 到着</p>
                <p class="pl-4 text-gray-600">ここで車とはいったんおさらば。駐車場は<a class="text-blue-500" href="https://www.happo-one.jp/access/parking/" target="blank">ここ</a></p>
            </x-itinerary-div>

            <x-itinerary-div time="19:00">
                <p><i class="fa-solid fa-star pr-2"></i>天空の天体ショーへ</p>
                <ul class="pl-4 text-gray-600 flex flex-col gap-2">
                    <li>■ 受付時間：19:00～19:30</li>
                    <li>■ 受付場所：八方尾根ゴンドラリフト八方駅 チケットセンター ゴンドラ乗車（上り）</li>
                    <li>■ 星空観察会：19:45～20:30</li>
                    <li>■ フリータイム：20:30～21:00</li>
                    <li>■ 解散：21:00～ ゴンドラ乗車（下り）八方駅へ</li>
                    <li>※持ち物（必要に応じて）：虫よけスプレー、懐中電灯、敷物、羽織物</li>
                </ul>
            </x-itinerary-div>

            <x-itinerary-div time="21:15">
                <p>HOUSE OF FINN JUHL HAKUBA 帰着</p>
                <p class="pl-4 text-gray-600">くつろぎタイム</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-moon pr-2"></i>Good Night</p>
            </x-itinerary-div>
        </div>
    </article>

    <article class="flex flex-col gap-16">
        <h2 class="text-center text-6xl text-bold">DAY2</h2>
        <div class="ml-8">
            <x-itinerary-div time="09:45">
                <p>HOUSE OF FINN JUHL HAKUBA 出発</p>
                <p class="pl-4 text-gray-600">朝ご飯...</p>
            </x-itinerary-div>

            <x-itinerary-div time="10:00">
                <p>白馬岩岳マウンテンリゾート 到着</p>
                <p class="pl-4 text-gray-600">アルプスのハイジのブランコが有名</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>昼食タイム</p>
            </x-itinerary-div>

            <x-itinerary-div time="12:30">
                <p>白馬岩岳マウンテンリゾート 出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="休憩">
                <p>良さげなSAがあったら寄ろう</p>
            </x-itinerary-div>

            <x-itinerary-div time="17:00">
                <p>御在所SA到着</p>
                <p class="pl-4 text-gray-600"><i class="fa-solid fa-utensils pr-2"></i>夕食タイム</p>
                <p class="pl-4 text-gray-600">上りより下りのがSAが大きい</p>
            </x-itinerary-div>

            <x-itinerary-div time="18:00">
                <p>御在所SA出発</p>
            </x-itinerary-div>

            <x-itinerary-div time="20:00">
                <p>ただいまちはちゃんハウス</p>
            </x-itinerary-div>
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
