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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Homepage"
    ]);
});

Route::get('/profile', function () {
    $profile_data = [
        [
            "nama" => "Bernadetha Emma Wawin",
            "nim" => "2440015101",
            "email" => "bernadetha.wawin@binus.ac.id",
            "description" => "Hallo! Saya biasa dipanggil Detha. 
            Saat ini saya menempuh pendidikan sebagai mahasiswa semester 6 di jurusan Teknik Informatika dan Statistika, BINUS University. 
            Mata kuliah yang menarik perhatian saya adalah machine learning, khususnya di bidang klasifikasi dan regresi. 
            Hobi saya adalah menonton drama dan mendengarkan musik.",
            "imgsrc" => "assets\profile\detha.jpg",
            "alt" => "detha",
            "type" => 1
        ],
        [
            "nama" => "Diana Petrina Santoso",
            "nim" => "2440015442",
            "email" => "diana.petrina@binus.ac.id",
            "description" => "Haii!! Namaku Diana, Binusian24 dari jurusan Teknik Informatika dan Statistika. 
            Selama perkuliahan ini, mata kuliah yang paling menarik perhatianku adalah Algorithm Design and Analysis karena di mata kuliah ini diberikan visualisasi berupa grafik dari algoritma-algoritma yang ada. 
            Aktivitas yang paling aku senangi saat-saat ini adalah mendengarkan musik.",
            "imgsrc" => "assets\profile\diana.jpg",
            "alt" => "diana",
            "type" => 2
        ],
        [
            "nama" => "Felicia Ferren",
            "nim" => "2440113071",
            "email" => "felicia.ferren@binus.ac.id",
            "description" => "Halo! Saya Felicia, Binusian24 jurusan Teknik Informatika dan Statistika. 
            Saya tertarik terhadap dunia data science dan mata kuliah yang menarik bagi saya selama 3 tahun berkuliah adalah Machine Learning. 
            Di luar kuliah, saya suka mendengarkan musik dan membaca.",
            "imgsrc" => "assets/profile/felicia.jpg",
            "alt" => "felicia",
            "type" => 1
        ],
        [
            "nama" => "Kania Agatha",
            "nim" => "2440064702",
            "email" => "kania.agatha@binus.ac.id",
            "description" => "Haiiiiii! Kenalin, aku Kania. 
            Aku mahasiswa jurusan Teknik Informatika dan Statistika. 
            Tahun ini merupakan tahun ke-3 ku berkuliah di BINUS University. 
            Mata kuliah favorit ku selama berkuliah adalah HCI, karena aku tertarik pada dunia UI/UX. 
            Hobiku adalah fotografi dan mengedit video.",
            "imgsrc" => "assets\profile\kania.jpg",
            "alt" => "kania",
            "type" => 2
        ]
    ];

    return view('profile', [
        "title" => "Profile",
        "data" => $profile_data
    ]);
});

Route::get('/posts', function () {
    return view('posts/post', [
        "title" => "Posts"
    ]);
});