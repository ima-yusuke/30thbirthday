<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Place;

class BirthdayController extends Controller
{

    public function ShowOpening(){

        return view("opening");
    }

    public function ShowIndex(){

        //日付順で取得
        $albumData = Post::orderBy('date', 'asc')->get();

        return view("index",compact("albumData"));
    }

    public function ShowList(){

        // カテゴリー順にソートして取得
        $places = Place::orderBy('prefecture')->orderBy('category')->get();

        return view("list",compact("places"));
    }

    public function AddList(Request $request){

        $place = new Place();
        $place->place = $request->place;
        $place->category = $request->category;
        $place->prefecture = $request->prefecture;
        $place->save();

        return redirect()->route("ShowList");
    }

    public function ToggleList(Request $request){

        $place = Place::find($request->id);
        $place->flag = !$place->flag;
        $place->save();

        return redirect()->route("ShowList");
    }

    public function DeleteList(Request $request){

        $place = Place::find($request->id);
        $place->delete();

        return redirect()->route("ShowList");
    }
}
