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
            <h2>The Events Page</h2>

            <p>This is the page where historical events are put in archives to keep them alive</p>
            <blockquote>The added pictures are to point what happened in those events, as just plain text is not enough to represent a an event</blockquote>
            <p>The added pictures are to point what happened in those events, as just plain text is not enough to represent a an event</p>
        </div>
        <div class="pageitem">
            <h2 style="text-align: center">Events</h2>
            <br />
            <br />
            <div class="d-table-cell" style="alignment: center">
                <table class="d-table-cell" style="alignment: center">
                    <style>
                        table, th, td {
                            border: 3px solid #115307;
                        }
                    </style>
                    <thead>
                    <tr>
                        <th>
                            Event Name
                        </th>
                        <th>
                            Event Description
                        </th>
                        <th>
                            Event Picture
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $events)
                        <tr>
                            <td>{{$events->name}}</td>
                            <td>{{$events->description}}</td>
                            <td><a href="{{$events->image}}">Click to open the picture</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection

