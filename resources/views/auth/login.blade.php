@extends('app')
@section('title', $page->title)

@section('content')
    <div class="ct sm">
        <x-auth.login></x-auth.login>
    </div>
@endsection
