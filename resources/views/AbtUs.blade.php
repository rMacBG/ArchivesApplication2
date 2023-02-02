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
                <li><a href="/archives_view">Archive Types</a></li>
                <li><a href="/events_view">Events</a></li>
                <li><a href="/about_us">About Us</a></li>
            </ul>
        </nav>
    </header>
@endsection
@section('content')
    <div id="content">
        <!-- Page Items -->
        <div class="pageitem">
            <h1>About Us</h1>

            <p>This website was made for the purpose to collect data of events and archive them to keep the history of the events alive.</p>
            <p>After all it is a pleasure to keep such information for the people to keep memories alive and be happy about them.</p>
            <br />
            <p>This website is only for educational purposes, all of the information found in website is just a type of fake data so it is not copyrighted by any means</p>
            <p>Please be careful when uploading data on the internet!!!</p>
        </div>
@endsection
