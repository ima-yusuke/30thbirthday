<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'posts';

    // マスアサインメント可能な属性
    protected $fillable = [
        'title',
        'text',
        'img_1',
        'img_2',
        'date',
    ];

    // タイムスタンプの管理を無効にする場合
    // public $timestamps = false;
}
