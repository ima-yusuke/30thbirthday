@foreach($posts as $idx=>$value)
    <div class="qa__item bg-white border border-solid border-gray-200 w-[80%] shrink-0">
        {{--既存投稿名--}}
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 py-6 px-2 ml-4">
            <div class="flex flex-col gap-1">
                <p class="text-xs text-gray-400">【{{$value["date"]}}】</p>
                <p class="text-xs md:text-base lg:text-lg font-bold leading-6 opacity-90">{{$value["title"]}}</p>

            </div>
            <aside class="flex gap-4 md:gap-6">
                <div class="flex">
                    <a data-post-id="{{$value["id"]}}" class="editBtn text-xs md:text-base font-medium text-blue-600 hover:underline mr-4">編集</a>
                    <a data-post-id="{{$value["id"]}}" class="deleteBtn text-xs md:text-base font-medium text-blue-600 hover:underline">削除</a>
                </div>
            </aside>
        </div>

        {{--既存投稿詳細（最初非表示）--}}
        <div class="qa__body">
            <form class="postForm h-[400px] overflow-y-scroll flex flex-col" method="post" enctype="multipart/form-data" data-post-id="{{$value["id"]}}">
                @csrf
                <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                    <p class="md:w-[250px] text-xs md:text-base">1.サムネイル画像</p>
                    <div class="flex flex-col md:flex-row gap-6 md:gap-16">
                        <aside class="flex flex-col md:items-center gap-2">
                            <p class="text-xs md:text-base">【現在の画像】</p>
                            <img src="{{asset($value->img_1)}}" width="100px">
                        </aside>
                        <aside class="flex flex-col gap-2">
                            <p class="text-xs md:text-base">【新しい画像】</p>
                            <input type="file" accept="image/jpeg,image/png" name="img_1" class="w-full text-xs h-[35px] md:h-full">
                        </aside>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                    <p class="md:w-[250px] text-xs md:text-base">2.サブ画像</p>
                    <div class="flex flex-col md:flex-row gap-6 md:gap-16">
                        <aside class="flex flex-col md:items-center gap-2">
                            <p class="text-xs md:text-base">【現在の画像】</p>
                            <img src="{{asset($value->img_2)}}" width="100px">
                        </aside>
                        <aside class="flex flex-col gap-2">
                            <p class="text-xs md:text-base">【新しい画像】</p>
                            <input type="file" accept="image/jpeg,image/png" name="img_2" class="w-full text-xs h-[35px] md:h-full">
                        </aside>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                    <p class="md:w-[250px] text-xs md:text-base">3.投稿名</p>
                    <div class="flex-1">
                        <input name="title" value="{{$value['title']}}" class="w-full text-xs md:text-base h-[35px] md:h-full border border-solid border-gray-400 rounded-md">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                    <p class="md:w-[250px] text-xs md:text-base">4.コンテンツ</p>
                    <div class="flex-1">
                        <textarea name="text" class="w-full text-xs md:text-base h-[35px] md:h-full border border-solid border-gray-400 rounded-md">{{$value['text']}}</textarea>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center gap-4 border-y border-solid border-gray-200 py-4">
                    <p class="md:w-[250px] text-xs md:text-base">5.日付</p>
                    <div class="flex-1">
                        <input type="date" name="date" value="{{$value['date']}}" class="w-full text-xs md:text-base h-[35px] md:h-full border border-solid border-gray-400 rounded-md">
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <button type="button" data-post-id="{{$value["id"]}}" class="submit-btn update-btn btn-border shadow-xl text-sm px-10 py-3 text-center">
                        更新
                    </button>
                </div>
            </form>
        </div>
    </div>
@endforeach
