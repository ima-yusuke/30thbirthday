<x-title-component color="profile-yellow" title="01.Profile" id="profile"></x-title-component>

{{--竹内--}}
<section id="profile1" class="profile anime relative w-full h-full flex flex-col justify-end items-center">
    <div class="w-full overflow-hidden">
        <img src="{{ asset('storage/img/title-profile.jpeg') }}" alt="profile" class="w-full h-[510px] object-cover">
    </div>
    <div class="relative w-full flex flex-col items-center">
        {{--ぼかし用のdiv--}}
        <div class="blur-bg"></div>

        <div class="absolute -top-24 left-8 text-left z-20 text-white">
            <div class="flex flex-col justify-start gap-2">
                <h2 class="font-bold text-xl">竹内 千速（30歳）</h2>
                <p>2級建築士/インテリアプランナー/主婦</p>
            </div>
        </div>

        <div class="relative bg-profile-yellow text-about-white text-center py-8 w-full flex flex-col items-center z-10">
            <div class="flex flex-col gap-6">
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">身長：152cm（小人）</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">あだ名：ヌオー</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">好きな食べ物：焼き鳥、赤えび</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">性格：怒りっぽい性格</p>
            </div>
        </div>
    </div>
</section>
{{--今井--}}
<section id="profile2" class="profile hide relative w-full h-full flex flex-col justify-end items-center">
    <div class="w-full overflow-hidden">
        <img src="{{ asset('storage/img/title-profile02.JPG') }}" alt="profile" class="w-full h-[510px] object-cover">
    </div>
    <div class="relative w-full flex flex-col items-center">
        {{--ぼかし用のdiv--}}
        <div class="blur-bg"></div>

        <div class="absolute -top-24 left-8 text-left z-20 text-white">
            <div class="flex flex-col justify-start gap-2">
                <h2 class="font-bold text-xl">今井 祐輔（27歳）</h2>
                <p>エンジニア/海外とちはちゃんオタク</p>
            </div>
        </div>

        <div class="relative bg-profile-yellow text-about-white text-center py-8 w-full flex flex-col items-center z-10">
            <div class="flex flex-col gap-6">
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">身長：188cm（巨人）</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">あだ名：もやし</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">好きな食べ物：ポテト、肉料理</p>
                <p class="border-2 border-solid border-about-white p-4 rounded-lg text-left">性格：ちはちゃん絶対服従</p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.getElementsByClassName("profile");

        function showNextSection() {

            if(sections[1].classList.contains("hide")){
                sections[0].classList.add("hide");
                sections[1].classList.remove("hide");
                sections[0].classList.remove("anime");
                sections[1].classList.add("anime");
            }else{
                sections[1].classList.add("hide");
                sections[0].classList.remove("hide");
                sections[1].classList.remove("anime");
                sections[0].classList.add("anime");

            }
        }

        // 5秒ごとにセクションを切り替える
        setInterval(showNextSection, 5000);
    });

</script>

