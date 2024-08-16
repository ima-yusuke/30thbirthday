<x-title-component color="album-green" title="03.Album" id="album"></x-title-component>
<section class="carousel">
    <div class="carousel-track">
        <img src="{{asset('storage/img/title-album.jpeg')}}" alt="album" class="object-cover">
        <img src="{{asset('storage/img/pic01-01.jpeg')}}" alt="album" class="object-cover">
        <img src="{{asset('storage/img/pic03-02.JPG')}}" alt="album" class="object-cover">
        <img src="{{asset('storage/img/pic04-01.jpeg')}}" alt="album" class="object-cover">
        <img src="{{asset('storage/img/title-album.jpeg')}}" alt="album" class="object-cover">
    </div>
</section>

<div class="bg-album-green flex flex-col justify-center items-center gap-6 h-[200px]">
    <p class="text-about-white text-sm">極秘ノートの内容をここで<span class="text-2xl">初</span>公開</p>
    <aside class="flex flex-col items-center gap-2">
        <p class="text-about-white" id="time_title">公開まで</p>
        <p class="text-about-white text-3xl" id="current_time"></p>
    </aside>

</div>

<section id="album_container" class="hide bg-about-white flex flex-col md:flex-wrap md:flex-row justify-center items-center gap-6 py-6">
    <?php
        $year = 2023;
        $month_1 = 1;
        $month_2 = 1;
        $en_month = [
            "01" => "JAN", "02" => "FEB", "03" => "MAR",
            "04" => "APR", "05" => "MAY", "06" => "JUN",
            "07" => "JUL", "08" => "AUG", "09" => "SEP",
            "10" => "OCT", "11" => "NOV", "12" => "DEC"
        ];
        $flag = false;
    ?>
    @foreach($albumData as $data)
        @if(date('m', strtotime($data["date"]))==$month_1.$month_2 && !$flag)
            <article class="story relative flex justify-center items-center w-[35vh] h-[45vh] bg-album-green text-about-white p-2.5 rounded-md shadow-lg">
                <p class="text-xl absolute top-4 left-[50%] transform -translate-x-1/2">{{$year}}</p>
                <aside class="flex items-center justify-center gap-4 text-4xl">
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p class="rotate-270">{{$en_month[date('m', strtotime($data["date"]))]}}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p>{{ $month_1 }}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p>{{ $month_2}}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                </aside>
            </article>

            <?php
                $flag = true;
            ?>

        @elseif(date('m', strtotime($data["date"]))!=$month_1.$month_2)

                <?php
                if($month_1==0 && $month_2<9){
                    $month_2++;
                }elseif($month_1==0 && $month_2==9){
                    $month_1++;
                    $month_2=0;
                }elseif($month_1==1 && $month_2==1){
                    $month_2++;
                }elseif ($month_1==1 && $month_2==2) {
                    $month_1 = 0;
                    $month_2 = 1;
                    $year++;
                }

                if (date('m', strtotime($data["date"]))!=$month_1.$month_2){
                    $month_1 = date('m', strtotime($data["date"]))[0];
                    $month_2 = date('m', strtotime($data["date"]))[1];
                }
                ?>


            <article class="story relative flex justify-center items-center w-[35vh] h-[45vh] bg-album-green text-about-white p-2.5 rounded-md shadow-lg">
                <p class="text-xl absolute top-4 left-[50%] transform -translate-x-1/2">{{$year}}</p>
                <aside class="flex items-center justify-center gap-4 text-4xl">
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p class="rotate-270">{{$en_month[date('m', strtotime($data["date"]))]}}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p>{{ $month_1 }}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                    <div class="relative w-[50px] h-[150px] bg-about-white p-2 rounded-md text-black font-extrabold flex items-center justify-center shadow-2xl">
                        <p>{{ $month_2}}</p>
                        <div class="hole bg-album-green"></div> <!-- 穴を追加 -->
                    </div>
                </aside>
            </article>
        @endif


            <!-- Modal toggle -->
        <article style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);" class="story open-modal w-[35vh] h-[45vh] bg-album-green p-2.5 rounded-md shadow-lg">
            <img src="{{asset($data['img_1'])}}" alt="album" class="w-[35vh] h-[30vh] object-cover">
            <aside class="flex flex-col justify-center items-start gap-1.5 pt-2">
                <p class="text-about-white text-xs">{{$data['date']}}</p>
                <p class="text-about-white text-sm">{!! nl2br(e($data['title'])) !!}</p>
            </aside>
        </article>

        <!-- Modal -->
        <x-album-modal-component :data="$data"></x-album-modal-component>


    @endforeach
</section>
<script>
    const dead = new Date(2024, 7, 18, 0, 0, 0); // 2024年8月18日 0:00:00
    const deadLine = parseInt( dead / 1000 ); // timestampに変更する
    const dateCurrent = parseInt( new Date() / 1000 ); // 現在時刻を取得
    const ALBUM_CONTAINER = document.getElementById("album_container");

    // カウントダウンの終了日を設定
    const countDownDate = new Date("2024-08-18T00:00:00").getTime();

    // 1秒ごとにカウントダウンを更新
    const countdownFunction = setInterval(function() {
        // 現在の日時を取得
        const now = new Date().getTime();

        // 終了日までの時間差を計算
        const distance = countDownDate - now;

        // 日、時、分、秒を計算
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // 表示用のテキストを作成
        document.getElementById("current_time").innerHTML =
            days + "日 " + hours + "時間 " + minutes + "分 " + seconds + "秒 ";

        // 終了したらメッセージを表示
        if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById("time_title").classList.add("hide");
            document.getElementById("current_time").innerHTML = "Happy Birthday";
            ALBUM_CONTAINER.classList.remove("hide");
        }
    }, 1000);
</script>
{{--JS--}}
@vite(['resources/js/scroll-animation.js', 'resources/js/modal.js'])


