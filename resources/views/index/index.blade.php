@extends('layouts.app')
@section('header')
    <header>
        <div id="banner">
            <div id="header">
                <h1>The Archive Hub</h1>
                <p class="sub"></p>
            </div>
        </div>
        <nav>
            <input type="checkbox" id="show-menu" role="button">
            <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
            <label for="show-menu" class="close"><span class="fa fa-times"></span></label>
            <ul id="menu">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="/archives_view">Archives</a></li>
                <li><a href="/events_view">Events</a></li>
            </ul>
        </nav>
    </header>
@endsection
@section('content')
<div id="content">
    <!-- Page Items -->
    <div class="pageitem">
        <h2>What do you seek?</h2>
        <p class="sub">If you can't find what you search, maybe we can help you find it!</p>
        <p>Here you can find information about events that happened in the past or documentation about something, you've come to the right place!</p>
        <blockquote>Especially if you are searching something specific, we are the ones who can help you! After all this is the so called <a href="/">Archive Hub.</a>Go click events and you will be able to find what you want!!!</blockquote>
        <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan nisi. Nullam et est vehicula, posuere massa
            a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet, suscipit tortor ac, ultricies magna.</p>

@endsection
