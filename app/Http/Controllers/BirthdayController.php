<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{

    public $albumData =[
        ["id"=>"month","year"=>"2023","num_1"=>"1","num_2"=>"1","en_month"=>"NOV"],

        ["id"=>1,"date"=>"2023.11.29","title"=>"コールセンター最終日\nもじもじとLINE交換した日","img-1"=>"storage/img/pic01-01.jpeg","img-2"=>"storage/img/pic01-02.PNG",
            "text"=>"やっとまともに話せた日。ちはちゃんが最終日で今日逃したらもう２度と会えへん思ってなんとかせな...って思ってた。\n
            でも結婚してるし誘ったら迷惑やしなぁ...でもどうしても仲良くなりたいなぁ...って葛藤しててとりあえず帰ってほしくなくてべらべら話してた。\n
            帰ることになってLINE交換しよ言うたのに中々携帯を出せずもじもじしてたの今でも覚えてます（泣）\n
            そんなこんなで反省会しながらの帰り道、ちはちゃんからのピコンってLINEの通知。こっから素敵な毎日のスタートやってんや！"],

        ["id"=>"month","year"=>"2023","num_1"=>"1","num_2"=>"2","en_month"=>"DEC"],

        ["id"=>2,"date"=>"2023.12.12","title"=>"初めて遊んだ日\n星月夜★","img-1"=>"storage/img/pic02-01.jpeg","img-2"=>"storage/img/pic02-02.jpeg",
            "text"=>"本当はもっと早く遊ぶつもりやってんけど俺が体調壊しちゃって、伸びてこの日初めて遊んだね。\n
            この日のことも覚えてるけど、俺は会えんくて初めて電話した日のことをめっちゃ覚えてる。その日の電話でちはちゃんの人として魅力的なところにたくさん気づきました。
            志摩に戻るきっかけになったじーじ、ばーばの話、これを聞いた就活中やった俺は今まで一回も見たことなかった三重県での就職サイトを見るようになったんよ。俺もこの人みたいになりたいって！\n
            電話中の『鼻水かみたいんやろ〜』とか、次のメシの予定立ててるときに『海鮮好きじゃないやろ？海鮮と違うとこいこ』って小さいことかもやけどちょっとしたことでも見てくれてる、気づいてくれる感じがして安心するしとにかく一緒にいて居心地がいい。
            口にしなくても俺の感じてる気持ちを察してくれてる気がするし、つっこまれた時図星なことが多い。\n
            こんな素敵な電話の後のあじへいはすごく緊張した。言わんかったけどコールセンターの後、爆速でシャワー浴びて良い匂いにして、髪もセットし直した。あじへいからのらんぷ、それから横山展望台で星見たね！
            このときかわいいって思ってたら、また突っ込まれて焦った。星月夜を聴きながら帰りたくない、でも幸せっていうなんとも言えん素敵な時間を過ごした。そんな次の日、まさかのドッキリ登場で寿命が縮みましたね..."],

        ["id"=>3,"date"=>"2023.12.19","title"=>"世界一のファミマ","img-1"=>"storage/img/pic03-01.jpeg","img-2"=>"storage/img/pic03-02.JPG",
            "text"=>"告白した日。おしゃれな場所とかじゃなくて、ふつーのファミマの駐車場で。\n
            どこかおしゃれな場所でタイミングを見て今日告白しよう。それだけ決めてた。でもなんでやろ、気づいたらファミマの駐車場で気持ちを話始めてしまった...それでもだまって何も言わずにずっと聞いてくれた。涙を流して聞いてくれた。
            それを見て確信した、そしてさらに好きになった。10年でも50年でも待ちたい人、これ以上好きになる人、尊敬する人は後にも先にもいないのでその価値がある人。\n
            人間としてもかっこいいし、一人の女の子としてもかわいい素敵な人。自分の軸がしっかりあって、ダメなとこはしっかり言ってくれる人。（最近は毎日怒られてる気がするけど）\n
            それでとっても”あったかい人。一緒にいると自分がなりたい理想の自分になれて、姉さんと出会ってからの自分が好き”。\n
            これからもしっかり愛を伝えていくね♡
            "],

        ["id"=>4,"date"=>"2023.12.24","title"=>"クリスマス in Shima\nキザでドキドキ展望台","img-1"=>"storage/img/pic04-01.jpeg","img-2"=>"storage/img/pic04-02.jpeg",
            "text"=>"今までで１番お金がかからなかったが１番楽しかったクリスマス。\n
            今までは何が美味しいのかも分からないがとりあえず雰囲気の良い”高いお店”を予約し、そこで”ブランド”をわたす儀式みたいなレールにひかれたことをしていた。しないとダメというプレッシャーを感じていて正直クリスマスなどのイベントは好きじゃなかった。\n
            でも今日は海辺や人気の少ないところを散歩したりして夜はちりめん亭でお客ゼロの中ラーメンを食べた。都会の喧騒やイルミなどの華やかさはないが満足度、充実度はだんとつ1番だった。\n
            けちりたいわけではなく、むしろ姉さんを行ったことがないと言ってた高層ビルのレストランにもいつか連れてってあげたい。ただ今日のような日もすごく好きで、一緒に楽しんでくれた姉さんを改めて好きになった日だった。\n
            高いお店やプレゼント、インスタいいねはまったく関係のない、2人でいれば楽しいと心底感じた日だった。\n
            横山展望台の駐車場でぎゅーと手を繋いだ。緊張と幸福感が最高に高まった時間だった。かわいすぎて止めれなかった。やたらとキザなセリフをいじられた...\n
            この日の情報：姉さんのタイプは昭和顔、ふんどしが似合う、コウハで寡黙な人（寡黙ってまずどういう意味なんやろ...）とりあえず寡黙になろう！"],

        ["id"=>5,"date"=>"2023.12.26","title"=>"早くて長かった2時間","img-1"=>"storage/img/pic05-01.jpeg","img-2"=>"storage/img/pic05-02.jpeg",
            "text"=>"志摩へ向かう道中ずっと考えていた。姉さんになにかしてあげたい。姉さんは真面目でしっかりしているし、周りからもそういうことをよく言われると思う。ただそれがプレッシャーになり、『しっかりしないといけない』と重荷になってるのではないかと感じる。俺といる時は『しんどい』など弱いところなど全て吐き出せる人になりたい。そしてそこをサポートできる人でありたい。\n
             群れない、流されず自分の軸があるとこが好き。今までとは違ったクリスマスを過ごして満足度が1番高かったのとクリスマスのみんなの投稿をみて感じた。純粋に綺麗な景色を楽しめたし、姉さんと一緒に見れたのが嬉しかったし、姉さんと色んな観光をしたい。\n
             展望台の駐車場でちゅーをした。するまですごく時間がかかった。上に乗られた時は心臓が止まりそうだった。少し気まずい時間があった。それは俺は姉さんの気持ちがなんとなく分かるような気はしていたが確信、自信がなかった。でもいつか返事を貰えると思ってた。姉さんは言葉じゃなく行動で表現するタイプだったらしくそこでいったん落ち着き考える時間があった。\n
            クリスマス祐輔じゃなかったら来てなかったというセリフや毎日のライン、電話などやこの日のちゅー試してみよっかのセリフなどから好いてくれてると感じ嬉しくなった。そしてそこからは緊張だったがちゅーをした。最高な瞬間だった。その後はイチャイチャした。自分はもちろん姉さんも色々エロの話をしたりして乗り気に感じてそこがまた幸せだった。
            "],

        ["id"=>6,"date"=>"2023.12.30","title"=>"姉さんと今井家","img-1"=>"storage/img/pic06-01.jpeg","img-2"=>"storage/img/pic06-02.png",
            "text"=>"ともやまへ再び。帰り道『ゆうすけとの時間たりひん』と言われすごく嬉しかった。姉さんが甘えてきてくれてる感じがした1日で心を開いてくれてるようで幸せだった。\n
            みかんをもらった。家に帰ると『今井家の皆様お召し上がりください』と手紙付でくれて、今までの彼女なら複雑な気持ちだったが姉さんは親と姉さんについて話すきっかけにもなるし自分も話したいのでそのまま明日の朝渡そうと思う。\n
            次の日、起きると姉さんについておかんやじーじばーばが話してるのが照れるがすごくすごく嬉しかっ。好きな人を家族も好きなのが嬉しい。\n
            『27歳やでまだまだこれからやよ〜』と姉さんに言われ、その裏腹には私といることでやりたいことが潰れてしまうのでは？という不安を感じてると思う。まったくそんなことないしむしろプラスなんだけど、それをなんとか伝えていきたい。姉さんが付き合うと言わないのは気持ちがないのではなくて、こういうところで悩んでるからだと思う。
            "],

        ["id"=>"month","year"=>"2024","num_1"=>"0","num_2"=>"1","en_month"=>"JAN"],

        ["id"=>7,"date"=>"2024.1.1","title"=>"姉さんとの初めてのお正月","img-1"=>"storage/img/pic07-01.PNG","img-2"=>"storage/img/pic07-02.jpeg",
            "text"=>"自分のやりたいこと、相手のやりたいことを大事にしたいと言ってた。年齢的にも結婚を考える姉さんと、まだまだ27歳でなんでもできると俺のことを気にかけてる姉さんがいて悩んでることがわかった。\n
            世界一周が夢の俺がもしそれをできなくなったらどうする？と聞かれた。ちはやといれるなら一切の後悔はないがうまくそれを伝えきれなかった。\n
            上手いこと思ってることを元彼には伝わらなかったみたいで悩んでいたが、俺は今のままのちはやでしっかり伝わってるし気持ちが届いてるからそれを伝えて安心させてあげたい。\n
            初夢。姉さんに好きと言われた。
            "],

        ["id"=>8,"date"=>"2024.1.6","title"=>"〇〇の日","img-1"=>"storage/img/pic08-02.jpeg","img-2"=>"storage/img/pic08-01.jpeg",
            "text"=>"ちはやと付き合った日。\n
            帰りに手紙を車でもらった。自分の伝えたい内容が伝わってることがわかる内容で、他の人には書けないちはやだからこそ書ける内容の手紙だった。それがすごい嬉しかった。よくある好き、かっこいいなどの
            誰でも書ける内容でなく、2人にしかわからないものだった。\n
            その後、直接好きと言われた。頭が真っ白になった。嬉しさと、この人と一緒にいることができる安心感と、尊敬してて大好きな人に好きと言われた幸せが爆発した。
            "],

        ["id"=>9,"date"=>"2024.1.7","title"=>"初デート","img-1"=>"storage/img/pic09-01.jpeg","img-2"=>"storage/img/pic09-02.jpeg",
            "text"=>"初デートの日。\n
            姉さんの考え方や人との関わり方、家族を大事に思うとこ、しっかり軸があって他人に流されないとこなどがステキで尊敬してて心の底からいいなって思う。だからそんな姉さんを真似したいし、真似して家族や友達に優しくしようとしてる自分がすき。だから姉さんといる自分が好きだと前回感じたと思う。\n
            和具の海で姉さん手作りサンドイッチ。付き合ったら作ってくれると言ってた手作り料理をもらえたことが嬉しかった。味も最高に美味しかった。お茶入れてくれたり、口ふいてくれたり、もうカップルということが嬉しすぎて幸せの絶頂だった。\n
            その後おっちゃんと話してた。すごくローカルな感じでステキな時間だった。また志摩市が好きになった瞬間だった。\n
            その後、ユニクロについてきてもらった。ここもすごく感慨深い時間だった。俺の服なのに俺以上に真剣に選んでくれて、試着してる時も他のが似合うかもと取りに行ってくれたりすごくうれしかった。でもなんとなく姉さんなら真剣に選んでくれるだろうな〜って事前に感じてたし、だからこそついてきてほしいと思った。選んでくれたら服もサイコーだった。いちばんのお気に入りの服。
            駐車場でイチャイチャした。すごく可愛いかったが、イチャイチャ後の会話がめちゃくちゃ良かった。『仕事の愚痴も全部聞くよ。かっこつけようと思わなくていいよ。どんな見た目でも好きと言ってくれて嬉しかったよ。』など話してくれて心の底からこの人を選んで好きになって、そして一緒にいれるようになって幸せだと思った。
            "],

        ["id"=>10,"date"=>"2024.1.12","title"=>"プロポーズ指輪（仮）","img-1"=>"storage/img/pic10-01.JPG","img-2"=>"storage/img/pic10-02.jpeg",
            "text"=>"明日のマッサの結婚式。ちはやからお祝儀袋と新札について連絡がきた。怒られたがなぜか嬉しかった。こゆとこが好き。\n
            遊んだ時、前告白してもらった日コメダで紙の指輪をあげた。それをまだ持っててくれててなんとも言えない気持ちになった。良い子すぎて好きがあふれた。何をプレゼントしても大事にしてくれそう。\n
            名古屋のホテルを予約した。すごく楽しみですごく緊張する。
            "],

        ["id"=>11,"date"=>"2024.1.20 ~ 1.21","title"=>"初お泊り in 名古屋","img-1"=>"storage/img/pic11-01.jpeg","img-2"=>"storage/img/pic11-02.JPG",
            "text"=>"いのっちの結婚式のあと名古屋のホテルにちーちゃんと初めてお泊まりした。\n
            たまたま駅に着く時間が同じでホテルまで一緒に向かった。お家に一緒に帰る感じで、着いてからテレビを一緒に見たりして不思議な感覚だった。緊張したけど心底楽しかった。泊まって良かったしまたしたい。\n
            俺がスケジュール帳作るといったら嬉しそうに使いたいと言ってくれた。こういうとこがすごい可愛くてすき。なにかちーちゃんのために作りたい。\n
            2日目は美術館に行った。真剣にみていてメモを取ってる姿がすごいステキで好きだった。何事にも一生懸命。いつもどんな話をしても真剣に聞いてくれて興味を持ってくれる。すごくそれが印象に残った瞬間\n
            ちなみにガチャガチャでおじゃる丸のキャラ狙った2体を1発ゲット！！！
            "],

        ["id"=>12,"date"=>"2024.1.30 ","title"=>"悩めるちはちゃん","img-1"=>"storage/img/pic12-01.jpeg","img-2"=>"storage/img/pic12-02.PNG",
            "text"=>"久々夜電話できた。すごく嬉しかった。\n
            この日ちーちゃんは悩んでた。志摩観での仕事が合ってないように感じてる。安く見られてるのが懸念点。前から合ってないのは感じてたし建築のがいきいきして話してたいつも。どんな決断をちーちゃんがしても応援するし味方でいようと思う。俺が稼げたらもっと楽させてあげれると思った。
            "],

        ["id"=>"month","year"=>"2024","num_1"=>"0","num_2"=>"2","en_month"=>"FEB"],

        ["id"=>13,"date"=>"2024.2.05 ","title"=>"パスタ・ゲーセン・ニトリ","img-1"=>"storage/img/pic13-01.JPG","img-2"=>"storage/img/pic13-02.jpeg",
            "text"=>"志摩のパスタをランチ。ららぽーとでキッズとゲーセン。スタバからのかもめで夜ご飯を食べた。\n
            『私もゆうすけのおじいちゃんおばあちゃん大事にしたい』と言ってくれたり、元気な時にしかできんことあるってセリフがすごい印象的で本当にこの人で良かったと改めて感じた。\n
            また最近仕事が楽しいのもあって幸せに感じてたがちーちゃんがいるから幸せだと再認識した日だった。ゲーセンでのキッズと話してるちーちゃんを見て家族を持ったらこーなるのかなと思ってた。
            ニトリで買い物してる時も俺の椅子選びを俺以上に真剣に悩んでくれてそれが1番嬉しかった。イスをわざわざ運んで机に合わせにいっていた。同棲したらこういう買い物が楽しみ。\n
            明日おかんに付き合ったと報告しようと思う。反応が楽しみだしめっちゃ緊張する。
            "],

        ["id"=>14,"date"=>"2024.2.10-2.11 ","title"=>"なばなとバレンタインデー","img-1"=>"storage/img/pic14-01.jpeg","img-2"=>"storage/img/pic14-02.jpeg",
            "text"=>"一蘭、ルートイン四日市、なばな、花しょうぶ、はま寿司に行った。\n
            初日バレンタインをもらった。コーラやポテトと俺の好きなものをくれたのが嬉しかった。俺が渡した手紙をずっと次の日も読むの楽しみにしてくれてるのが可愛かった。\n
            なばなでは『白いチューリップ』にすごく惹かれてて、インスタいいね欲しさや映えのためでなく本当に花が好きで楽しんでるんだろなと思って改めてちーちゃんが好きになった。\n
            梅の花が好きと言ってたので鈴鹿の梅しぐれに連れて行きたい。コロッケを食べてるのがヒゲだんYouTubeの115万キロのフィルムの女の子みたいで嬉しかった。\n
            はなしょうぶでは岩盤浴をした。ぴったりくっついてくるとこや、俺が持ってきたダイヤのAを読んだことないのに10巻を呼んでいてそゆとこがすき。あとスイッチを借りてスマブラをした。
            やり方が分からなかったが全力で楽しんでてこの人ならどこに行っても楽しめると思う。\n
            上手く言えんけど二日間通してまた好きになったしずっと一緒にいたい。次は県外にお泊まり旅行したいな〜
            "],

        ["id"=>15,"date"=>"2024.2.10-2.11 ","title"=>"花粉症とうどん","img-1"=>"storage/img/pic15-01.jpeg","img-2"=>"storage/img/pic15-02.jpeg",
            "text"=>"志摩のうどんにいった。\n
            花粉だからって薬をくれてめっちゃ嬉しかった。こういう気遣いのプレゼントはどんなブランドより嬉しい。\n
            帰り道電話で同棲したい、でもせっかくお父さん帰ってくるしじーじばーばとの時間も奪いたくないと言ってくれて本当にこの人で良かったと改めて感じた。
            "],

        ["id"=>16,"date"=>"2024.2.28 ","title"=>"何気ない電話","img-1"=>"storage/img/pic16-01.JPG","img-2"=>"storage/img/pic16-02.jpeg",
            "text"=>"仕事帰りの電話が印象的だった。\n
            頼りがいがない、社会で生きてく常識がない、子供といるみたいなど言われて振られると思った。けっこうショックだった。
            でも人間的には優しくて頼れるし離れるつもりないよ、姉さんが調教するって言ってくれて嬉しかった。\n
            改めてこの人と付き合って良かったと心底感じた時間だった。\n
            姉さんパパが帰ってきて電話を切った。でも俺が振られるか不安と話してた時だったからかその後すぐにかけ直してきてくれた。
            本当に心の優しいあったかい素敵な人。話してなくても何もかも見透かされる、すごいそれが嬉しい。\n
            結婚についてお風呂で考えてた。みんながしてるから、歳だから、とかでなんとなく結婚てするもんなのかな〜って思ってたけど姉さんはこの人とずっと一緒にいたい、
            だから結婚したいと思う。\n
            "],

        ["id"=>"month","year"=>"2024","num_1"=>"0","num_2"=>"4","en_month"=>"APR"],

    ];

    public function ShowOpening(){

        return view("opening");
    }

    public function ShowIndex(){

        $albumData = $this->albumData;

        return view("index",compact("albumData"));
    }

    public function MoveTemporary()
    {
        $files = Storage::disk('public')->files('img'); // 'img' は画像が保存されているフォルダ名

        foreach ($files as $file) {
            // ファイルを 'temporary' ディスクにコピー
            Storage::disk('temporary')->put($file, Storage::disk('public')->get($file));

            // コピーが成功した場合、元のファイルを削除
            // もし必要ならばここでpublicディスクに再コピーすることも可能
             Storage::disk('public')->put($file, Storage::disk('temporary')->get($file));

//            Storage::disk('public')->delete($file);
        }

        return view("opening");
    }
}
