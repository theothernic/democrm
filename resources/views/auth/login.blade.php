@extends('app')
@section('title', $page->title)

@section('content')
    <div class="ct md">
        <h1 class="title">{{ $page->title }}</h1>

        <x-auth.login></x-auth.login>
    </div>
@endsection
