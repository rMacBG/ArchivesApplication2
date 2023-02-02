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
        <h2>Paragraphs, Links, and a Blockquote</h2>
        <p class="sub">Sed sed neque sed quam aliquet mattis.</p>
        <p>Sed quis ultricies ligula. Pellentesque vel dolor quis massa vehicula dictum at id magna. Proin eleifend sapien in porttitor bibendum. Aliquam lacinia rutrum dui at tempor. <a href="#">Praesent ut purus fringilla</a>, fringilla nulla eu, dignissim neque.
            Mauris ac turpis vitae augue sagittis laoreet. Sed nulla diam, malesuada a ligula eu, facilisis pharetra eros. Vivamus nec luctus ante, sed rhoncus diam. Pellentesque eleifend sollicitudin neque vitae accumsan. Duis efficitur gravida porttitor.</p>
        <blockquote>Suspendisse egestas luctus gravida. Nulla consectetur sed quam vitae dignissim. Etiam fringilla nisl lectus, sit amet faucibus lacus sagittis vel. Integer cursus velit a est elementum auctor. Cras ut felis a orci gravida pulvinar nec non tortor. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis porta nulla. Proin a nunc quis lacus eleifend tincidunt laoreet nec erat. Cras augue odio, cursus eget dui nec, ullamcorper viverra quam.</blockquote>
        <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan nisi. Nullam et est vehicula, posuere massa
            a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet, suscipit tortor ac, ultricies magna.</p>
    </div>
    <div class="pageitem">
        <h2 style="text-align: center">Archives Types</h2>
        <br />
        <br />
        <div class="d-table-cell">
            <table class="d-table-cell">
                <style>
                    table, th, td {
                        border: 1px solid #115307;
                        align-items: center;
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

        </div>
    </div>
@endsection

