@extends('app')
@section('title', $page->title)

@section('content')
    <aside id="Sidebar">
        <nav id="MainNav">
            <ul>
                <li><a href="#">Leads</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Documents</a></li>

            </ul>
        </nav>
    </aside>

    <section id="Stage">
        <h1>Welcome, {{ $page->user->name }}!</h1>


        <section class="leads">
            <h2>Current Leads</h2>
        </section>
    </section>
@endsection
