<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class AdminController extends Controller
{
    //[SHOW]投稿
    public function ShowPostPage()
    {
        $posts = Post::all();
//        $categories = Category::all(); // 全てのカテゴリを取得
        return view("dash-post", compact("posts"));
    }

    //[ADD]投稿
    public function AddPost(Request $request)
    {
        // トランザクションの開始
        DB::beginTransaction();

        try {
            // アップロードされたファイル名を取得
            $imgFileName1 = $request->file('img_1')->getClientOriginalName();
            $imgFileName2 = $request->file('img_2')->getClientOriginalName();

            // 商品情報の保存
            $post = new Post();
            $post->title = $request->title;
            $post->text = $request->text;
            $post->date = $request->date;
            $post->img_1 = 'storage/img/' . $imgFileName1;
            $post->img_2 = 'storage/img/' . $imgFileName2;

            $post->save();

            // 画像を保存するディレクトリのパスを生成
            $mainDirectoryPath = storage_path('app/public/img/main/' . $post->id);
            $subDirectoryPath = storage_path('app/public/img/sub/' . $post->id);

            // ディレクトリが存在しない場合は作成し、パーミッションを設定
            if (!file_exists($mainDirectoryPath)) {
                mkdir($mainDirectoryPath, 0755, true);
                chmod($mainDirectoryPath, 0755);
            }

            // ディレクトリが存在しない場合は作成し、パーミッションを設定
            if (!file_exists($subDirectoryPath)) {
                mkdir($subDirectoryPath, 0755, true);
                chmod($subDirectoryPath, 0755);
            }

            // storageに画像ファイル保存
            $request->file('img_1')->storeAs('public/img/main/' . $post->id, $imgFileName1);
            $request->file('img_2')->storeAs('public/img/sub/' . $post->id, $imgFileName2);

            // 画像パスを更新
            $post->img_1 = 'storage/img/main/' . $post->id . '/' . $imgFileName1;
            $post->img_2 = 'storage/img/sub/' . $post->id . '/' . $imgFileName2;

            $post->save();

            // トランザクションのコミット
            DB::commit();

            // 成功レスポンスを返す
            return response()->json([
                'message' => '投稿が正常に追加されました',
                'redirect' => route('ShowPostPage')
            ], 200);
        } catch (\Exception $e) {
            // トランザクションのロールバック
            DB::rollback();

            // エラーレスポンスを返す
            return response()->json([
                'message' => '投稿追加に失敗しました',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //[UPDATE]投稿
    public function UpdatePost(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $post = Post::findOrFail($id);

            if ($request->hasFile('img_1')) {
                // 新しい画像のパス
                $mainImgPath = 'public/img/main/' . $post->id;
                $mainDirectoryPath = storage_path('app/public/img/main/' . $post->id);

                // 以前の画像を削除
                Storage::disk('public')->deleteDirectory('img/main/' . $post->id);

                // 新しいディレクトリを作成し、パーミッションを設定
                if (!file_exists($mainDirectoryPath)) {
                    mkdir($mainDirectoryPath, 0755, true);
                    chmod($mainDirectoryPath, 0755);
                }

                $fileName1 = $request->file('img_1')->getClientOriginalName();
                $request->file('img_1')->storeAs($mainImgPath, $fileName1);
                $post->img_1 = 'storage/img/main/' . $post->id . '/' . $fileName1;
            }

            if ($request->hasFile('img_2')) {
                // 新しい画像のパス
                $subImgPath = 'public/img/sub/' . $post->id;
                $subDirectoryPath = storage_path('app/public/img/sub/' . $post->id);

                // 以前の画像を削除
                Storage::disk('public')->deleteDirectory('img/sub/' . $post->id);

                // 新しいディレクトリを作成し、パーミッションを設定
                if (!file_exists($subDirectoryPath)) {
                    mkdir($subDirectoryPath, 0755, true);
                    chmod($subDirectoryPath, 0755);
                }

                $fileName2 = $request->file('img_2')->getClientOriginalName();
                $request->file('img_2')->storeAs($subImgPath, $fileName2);
                $post->img_2 = 'storage/img/sub/' . $post->id . '/' . $fileName2;
            }

            // 投稿の更新
            $post->title = $request->title;
            $post->text = $request->text;
            $post->date = $request->date;
            $post->save();

            DB::commit();
            return response()->json([
                'message' => '投稿が正常に更新されました',
                'redirect' => route('ShowPostPage')
            ], 200);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => '投稿更新に失敗しました',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    //[DELETE]投稿
    public function DeletePost(Request $request)
    {
        try {
            // 商品テーブルから指定のIDのレコード1件を取得
            $post = Post::find($request->id);

            if (!$post) {
                return response()->json([
                    'message' => '削除対象の投稿が見つかりませんでした',
                ], 404);
            }

            // ディレクトリを削除
            $mainDirectoryPath = 'img/main/' . $post->id;
            if (Storage::disk('public')->exists($mainDirectoryPath)) {
                Storage::disk('public')->deleteDirectory($mainDirectoryPath);
            }

            $subDirectoryPath = 'img/sub/' . $post->id;
            if (Storage::disk('public')->exists($subDirectoryPath)) {
                Storage::disk('public')->deleteDirectory($subDirectoryPath);
            }

            // レコードを削除
            $post->delete();

            // JSONレスポンスを返す
            return response()->json([
                'message' => '投稿が正常に削除されました',
                'redirect' => route('ShowPostPage')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => '投稿の削除に失敗しました',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}




