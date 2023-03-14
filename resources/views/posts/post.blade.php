@extends('app')

@section('header')
    @include('layout.header')
@endsection


@section('content')
   
@endsection

@section('footer')
    @include('layout.footer')
@endsection




{{-- @extends('app')

@section('content')
    <h1>Posts Page</h1>

    @forelse ($posts as $post)
        <x-post-card title="post title" />
    @empty
        <p>No posts</p>
    @endforelse
@endsection --}}