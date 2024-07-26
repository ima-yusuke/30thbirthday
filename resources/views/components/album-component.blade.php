<x-title-component color="album-green" title="02.Album"></x-title-component>
<section>
    <img src="{{asset('storage/img/title-album.jpeg')}}" alt="album" class="w-full object-cover">
    <div class="bg-album-green flex flex-col justify-center items-center gap-4 h-[200px]">
        <p class="text-about-white text-sm">極秘ノートの内容をここで公開してくよ</p>
        <p class="text-about-white text-xs">改めて"極秘"ってなんなんやろなぁ...</p>
    </div>
</section>

<section class="bg-about-white flex flex-col md:flex-wrap md:flex-row justify-center items-center gap-6 py-6">
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
{{--JS--}}
@vite(['resources/js/scroll-animation.js', 'resources/js/modal.js'])


