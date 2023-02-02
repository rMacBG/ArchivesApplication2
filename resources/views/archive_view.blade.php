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
                <li><a href="/AbtUs">About Us</a></li>
            </ul>
        </nav>
    </header>
@endsection
@section('content')
    <div id="content">
        <!-- Page Items -->
        <div class="pageitem">
            <h2>The Archives</h2>
            <p class="sub">Yes we got them here!</p>
            <p>Searching for documents? Here you go a big platter of documents and many pictures</p>
            <blockquote>As someone who has searched alot for everything, it is very hard to find information sometimes so as someone who hates that, this is the place to search!!!</blockquote>
            <p>Go ahead start researching!!!</p>
        </div>
        <div class="pageitem">
            <h2 style="text-align: center">Archives Types</h2>
            <p style="text-align: center" class="sub">these are the file types you can find here</p>
            <br />
            <br />
            <div class="d-table-cell" style="alignment: center">
                <table class="d-table-cell" style="alignment: center">
                    <style>
                        table, th, td {
                            border: 1px solid #115307;
                            alignment: center;
                        }
                    </style>
                <thead>
                <tr>
                    <th>
                        Archive Types
                    </th>
                    <th>
                        Archive Description on what can be found.
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($archives as $archives)
                    <tr>
                        <td>{{$archives->Archive}}</td>
                        <td>{{$archives->Archive_Description}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
@endsection
