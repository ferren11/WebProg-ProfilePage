<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok-1 || ProfilePage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    <section class="hero is-fullheight">
        <div class="hero-head">
            <nav class="navbar is-dark is-fixed-top has-background-black-bis">
            <div class="is-flex is-justify-content-space-between w-full px-1 py-3">
            
              <div class="navbar-brand">
                <a class="navbar-item has-background-black-bis" href="/"><img src="{{ URL::asset('assets/logokelompok1.png') }}"/>
                </a>
              </div>
            
              <div class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item has-text-white" href="/">Home</a>
                  <a class="navbar-item has-text-white" href="/profile">Profile</a>
                </div>
              </div>
          </nav>
    

    <!-- <div id="about" class="pt-6"></div> -->
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        <!-- PROFILE 1 -->
        <div class="columns is-justify-content-center">
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Bernadetha Emma Wawin</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440015101 &nbsp|</span>
                    <span> &nbsp bernadetha.wawin@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Hallo! Saya biasa dipanggil Detha. 
                    Saat ini saya menempuh pendidikan sebagai mahasiswa semester 6 di jurusan Teknik Informatika dan Statistika, BINUS University. 
                    Mata kuliah yang menarik perhatian saya adalah machine learning, khususnya di bidang klasifikasi dan regresi. 
                    Hobi saya adalah menonton drama dan mendengarkan musik.  
                </p>
            </div>

            <figure class="ml-6 mt-6" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\detha.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
        </div>

    <!-- PROFILE 2 -->
        <div class="columns is-justify-content-center">
            <figure class="ml-6 mt-6 pt-auto" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\diana.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Diana Petrina Santoso</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440015442 &nbsp|</span>
                    <span> &nbsp diana.petrina@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Haii!! Namaku Diana, Binusian24 dari jurusan Teknik Informatika dan Statistika. 
                    Selama perkuliahan ini, mata kuliah yang paling menarik perhatianku adalah Algorithm Design and Analysis karena di mata kuliah ini diberikan visualisasi berupa grafik dari algoritma-algoritma yang ada. 
                    Aktivitas yang paling aku senangi saat-saat ini adalah mendengarkan musik.
                </p>
            </div>
        </div>

        <!-- PROFILE 3 -->
        <div class="columns is-justify-content-center">
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Felicia Ferren</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span>2440113071 &nbsp|</span>
                    <span> &nbsp felicia.ferren@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Halo! Saya Felicia, Binusian24 jurusan Teknik Informatika dan Statistika. 
                    Saya tertarik terhadap dunia data science dan mata kuliah yang menarik bagi saya selama 3 tahun berkuliah adalah Machine Learning. 
                    Di luar kuliah, saya suka mendengarkan musik dan membaca. 
                </p>
            </div>

            <figure class="ml-6 mt-6" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\felicia.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
        </div>

    <!-- PROFILE 4 -->
        <div class="columns is-justify-content-center">
            <figure class="ml-6 mt-6 pt-auto" style="margin-top:10px;">
                <img src="{{ URL::asset('assets\profile\kania.jpg') }}" style="width:200px; height: 200px; border-radius: 50%;">
            </figure>
            <div class="column is-7 ml-6">
                <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;">Kania Agatha</h5>
                <div class="is-size-6  has-text-left has-text-weight-semibold">
                    <span> &nbsp|</span>
                    <span> &nbsp kania.agatha@binus.ac.id</span>
                </div>
                <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;"">
                    Haiiiiii! Kenalin, aku Kania. 
                    Aku mahasiswa jurusan Teknik Informatika dan Statistika. 
                    Tahun ini merupakan tahun ke-3 ku berkuliah di BINUS University. 
                    Mata kuliah favorit ku selama berkuliah adalah HCI, karena aku tertarik pada dunia UI/UX. 
                    Hobiku adalah fotografi dan mengedit video.  
                </p>
            </div>
        </div>
    </section>

    <footer class="hero-foot has-background-black-bis pt-4 pb-2">
        <div class="content has-text-centered">
        <p class="is-large has-text-light m-0">
            <strong class="has-text-white">Thank you for visitting our page!</strong>
            The website content is not licensed
            <p>
            Jakarta, Indonesia
            &copy;
            <span id="year">March 2023</span>
            </p>
        </p>

        </div>
    </footer>
</body>
</html>