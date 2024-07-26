<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Post;

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
}
