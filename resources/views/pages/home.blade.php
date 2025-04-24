@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di gedung batam')

@section('content')


<h1 class="text-xl font-bold mb-4">Gedung</h1>
<p class="mb-4">Gambar di bawah ini adalah gedung</p>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-6xl mx-auto">
    @include('components.card', [
        'imgsrc' => 'images/gedung2.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])

    @include('components.card', [
        'imgsrc' => 'images/gedung3.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])

    @include('components.card', [
        'imgsrc' => 'images/gedung6.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])

    @include('components.card', [
        'imgsrc' => 'images/gedung7.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])

    @include('components.card', [
        'imgsrc' => 'images/gedung8.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])

    @include('components.card', [
        'imgsrc' => 'images/gedung9.jpg',
        'title' => 'Gedung',
        'desc' => 'Gedung dengan bangunan yang moderen.'
    ])
  </div>


@endsection