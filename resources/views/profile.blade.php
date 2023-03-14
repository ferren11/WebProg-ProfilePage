@extends('app')

@section('header')
    @include('layout.header')
@endsection


@section('content')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        @foreach ($data as $d)
            @if ($d["type"] === 1)
                @include('layout.profile-1')
            @else
                @include('layout.profile-2')
            @endif
        @endforeach
    </section>
@endsection

@section('footer')
    @include('layout.footer')
@endsection