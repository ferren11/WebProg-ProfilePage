@extends('app')

@section('header')
    @include('layout.header')
@endsection


@section('content')
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
@endsection

@section('footer')
    @include('layout.footer')
@endsection