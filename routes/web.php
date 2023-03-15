<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Route Index
Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});
# Route Register
Route::get('/reg', function () {
    return view('reg', [ 
        "tittle" => "Register",
        "nama" => "Febri Nur Ulumudin",
    ]);
});
# Route About
Route::get('/about', function () {
    return view('about', [ 
        "tittle" => "About",
        "nama" => "Febri Nur Ulumudin",
        "tempat" => "Surabaya",
        "jenkel" => "Laki-laki"
    ]);
});
# Route API Pulsa
Route::get('/posts', function () {
    $blog_post = [
        [
            "title" => "Berita Pagi",
            "slug" => "berita-pagi",
            "author" => "Febri Nur Ulumudin",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?"
        ],
        [
            "title" => "Berita Siang",
            "slug" => "berita-siang",
            "author" => "Febri Nur Ulumudin",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?"
        ]
    ];
    return view('posts', [ 
        "tittle" => "Posts",
        "posts" => $blog_post
    ]);
});
# Route API Pulsa Single
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Berita Pagi",
            "slug" => "berita-pagi",
            "author" => "Febri Nur Ulumudin",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?"
        ],
        [
            "title" => "Berita Siang",
            "slug" => "berita-siang",
            "author" => "Febri Nur Ulumudin",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi corrupti expedita, asperiores molestias nihil voluptas, at voluptates assumenda et ad aliquam illo dolores libero non molestiae esse accusamus veritatis odio?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat, assumenda atque ipsam temporibus fuga a delectus necessitatibus vel obcaecati illum quis, omnis corrupti doloremque praesentium distinctio itaque. Veritatis, quasi?"
        ]
    ];

    $new_post = [];
    foreach($blog_post as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [ 
        "tittle" => "Single Post",
        "posts" => $new_post
    ]);
});