<div class="bg-white border border-solid border-gray-200 w-[80%] shrink-0">
    {{--アコーディオンタイトル部分--}}
    <div class="flex items-center justify-between gap-4 py-6 px-2 ml-2 md:ml-4">
        <div>
            <p class="text-xs md:text-base lg:text-lg font-bold leading-6 opacity-90">
                <span class="bg-red-500 text-white text-xs md:text-sm font-medium me-2 px-2.5 py-0.5 rounded-8">New</span>新規投稿
            </p>
        </div>
        <aside>
            <div>
                <a class="editBtn addProductBtn text-xs md:text-base font-medium text-blue-600 hover:underline"><i class="fa-solid fa-plus"></i></a>
            </div>
        </aside>
    </div>

    {{--新規投稿詳細登録フォーム（最初非表示）--}}
    <div class="qa__body flex flex-col">
        <form class="h-[400px] overflow-y-scroll flex flex-col" id="post_form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                <x-required-title title="1.サムネ画像" />
                <div class="flex-1">
                    <input type="file" accept="image/jpeg,image/png" name="img_1" id="img_1" class="w-full text-xs h-[35px] md:h-full border border-solid border-gray-400 rounded-md" required />
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                <x-required-title title="2.サブ画像" />
                <div class="flex-1">
                    <input type="file" accept="image/jpeg,image/png" name="img_2" id="img_2" class="w-full text-xs h-[35px] md:h-full border border-solid border-gray-400 rounded-md" required />
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                <x-required-title title="3.投稿名" />
                <div class="flex-1">
                    <input id="title" name="title" class="w-full h-[35px] md:h-full border border-solid border-gray-400 rounded-md" required />
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                <x-required-title title="4.コンテンツ" />
                <div class="flex-1">
                    <textarea id="text" name="text" class="w-full h-[35px] md:h-full border border-solid border-gray-400 rounded-md" required></textarea>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                <x-required-title title="5.日付" />
                <div class="flex-1">
                    <input type="date" id="date" name="date" class="w-full h-[35px] border border-solid border-gray-400 rounded-md" required>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button type="button" data-route="{{ route('AddPost') }}" id="add_post_btn" class="submit-btn btn-border shadow-xl text-sm px-10 py-3 text-center">
                    登録
                </button>
            </div>

        </form>
    </div>
</div>
