<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kelompok-1 || Home</title>

        {{-- using bulma --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>

    <body class="antialiased">
      {{-- HEADER --}}
      <section class="hero">
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
            </div>
            </nav>
        </div>
      </section>

      {{-- CONTENT --}}
      <section class="hero is-fullheight">
          <div class="hero-body p-0 img-header">
            
            <div class="main-hero"></div>
            <div class="container has-text-centered">
              <p data-aos="zoom-out-down" class="subtitle font-light" style="color: white">Halo, Pak Anderies</p>
              <h1 data-aos="zoom-out" class="title font-light is-1" style="color: white">
                <em>Kami dari Kelompok 1</em> 
              </h1>
              <p data-aos="zoom-out-up" class="subtitle font-light" style="color: white">
                Silakan dilihat 
                <a href="/profile" style="color: white;  text-decoration: underline">profile kami</a>
              </p> 
            </div>
          </div>
      </section>

      {{-- FOOTER --}}
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
