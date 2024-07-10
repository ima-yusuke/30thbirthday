<div class="hidden modal fixed left-0 top-0 z-50 min-h-screen w-full bg-black/85">

    {{-- Modal親タグ (背景色/白色) --}}
    <div class="absolute overflow-y-scroll bg-about-white top-0 left-0 bottom-0 right-0 m-auto w-[90%] md:w-[60%] h-[90vh] md:h-[70vh] lg:h-[90vh] rounded-[20px]">
        <!-- Modal content -->
        <div class="p-4 md:p-6">
            {{--右上固定closeボタン--}}
            <button type="button" class="sticky top-0 z-40 close-modal-1"><i class="fa-solid fa-xmark text-4xl font-bold"></i></button>

            {{-- Modal body --}}
            <div>
                <div class="relative">
                    <img src="{{ asset($data['img-1']) }}" class="md:h-550 w-full object-cover">

                    <h3 class="bg-indigo-50 opacity-75 shadow-[0px 0px 8px rgba(255, 255, 255, 0.50)] text-md absolute bottom-0 w-full px-4 py-2 text-start font-black !leading-relaxed text-textBlack md:text-3xl">
                        {!! nl2br(e($data['title'])) !!}
                    </h3>
                </div>
                <div class="py-6 px-4">
                    <p>{!! nl2br(e($data['text'])) !!}</p>
                </div>
                <img src="{{ asset($data['img-2']) }}" class="md:h-550 w-full object-cover">
            </div>

            {{-- Modal footer --}}
            <div class="flex justify-center items-center mt-2 md:mt-8 p-4 md:p-5 rounded-b">
                <button type="button" class="close-modal-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">閉じる</button>
            </div>
        </div>
    </div>

</div>
