<x-template title="Birthday">
    <section class="flex flex-col gap-4">
        {{--更新時間--}}
        <article class="flex justify-center">
            <p>2024年8月25日23:40</p>
        </article>

        {{--タイトル--}}
        <h1 class="bold text-2xl text-center">今井祐輔と行きたい所🦦</h1>

        {{--新規--}}
        <article class="flex flex-col gap-4 w-full">
            <form method="post" action="{{route('AddList')}}" class="flex flex-col items-center gap-4">
                @csrf
                <input type="text" name="place" placeholder="行きたい所" class="w-[90%]">
                <select name="category" class="w-[90%]">
                    <option value="">カテゴリーを選択してください</option>
                    <option value="ご飯">ご飯</option>
                    <option value="宿">宿</option>
                    <option value="観光">観光</option>
                    <option value="その他">その他</option>
                </select>
                <select name="prefecture" id="prefecture" class="w-[90%]">
                    <option value="">都道府県を選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select>


                <button type="submit" class="border border-solid border-black p-2 rounded-lg">追加</button>
            </form>
        </article>

        {{--リスト--}}
        <article class="ml-6 mt-6">
            <ul class="flex flex-col gap-4">
                @if($places!=null)
                    @foreach($places as $place)
                        <li class="flex items-center">
                            <form method="post" action="{{route('ToggleList')}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{ $place->id }}">
                                @if($place["flag"]===1)
                                    <button type="submit">◉</button>
                                @else
                                    <button type="submit">◯</button>
                                @endif
                            </form>
                            <p>{{$place["place"]}}（{{$place["prefecture"]}}/{{$place["category"]}}）</p>
                            <form method="post" action="{{route('DeleteList')}}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $place->id }}">
                                <button type="submit" class="p-2 bg-red-500 rounded-lg text-white">削除</button>
                            </form>
                        </li>
                    @endforeach
                @endif

            </ul>
        </article>
    </section>
</x-template>
