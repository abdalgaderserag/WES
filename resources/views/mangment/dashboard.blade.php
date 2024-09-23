@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/mangment.css') }}">
@endsection

@section('main')
    <h1 class="header-title">Workers:</h1>

    <div id="workers">
        <div class="section">
            <div class="item-row">Omar Mousa</div>
            <div class="item-row">
                <span>status:</span> online <br>
                <span>active tasks:</span> 4 <br>
                <span>tasks waiting review:</span> 2 <br>
                <span>completed tasks this month:</span> 120 <br>
            </div>
        </div>


        <div class="section">
            <div class="item-row">Omar Mousa</div>
            <div class="item-row">
                <span>status:</span> online <br>
                <span>active tasks:</span> 4 <br>
                <span>tasks waiting review:</span> 2 <br>
                <span>completed tasks this month:</span> 120 <br>
            </div>
        </div>


        <div class="section">
            <div class="item-row">Omar Mousa</div>
            <div class="item-row">
                <span>status:</span> online <br>
                <span>active tasks:</span> 4 <br>
                <span>tasks waiting review:</span> 2 <br>
                <span>completed tasks this month:</span> 120 <br>
            </div>
        </div>

        <div class="section">
            <div class="item-row">Omar Mousa</div>
            <div class="item-row">
                <span>status:</span> online <br>
                <span>active tasks:</span> 4 <br>
                <span>tasks waiting review:</span> 2 <br>
                <span>completed tasks this month:</span> 120 <br>
            </div>
        </div>

        <div class="section">
            <div class="item-row">Omar Mousa</div>
            <div class="item-row">
                <span>status:</span> online <br>
                <span>active tasks:</span> 4 <br>
                <span>tasks waiting review:</span> 2 <br>
                <span>completed tasks this month:</span> 120 <br>
            </div>
        </div>


    </div>


    <br><br><br>
    <h1 class="header-title">Tasks:</h1>
    <div class="section" id="orders">
        <div class="item-row flex">
            <div class="item">
                Task
            </div>

            <div class="item">
                Deadline
            </div>

            <div class="item center-text">
                status
            </div>

            <div class="item center-text">
                Actions
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status status-d">late</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status">waiting</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status">waiting</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status status-f">reviewed</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status">waiting</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>

        <div class="item-row flex">
            <div class="item">
                add the salary review
            </div>

            <div class="item">
                2 hours
            </div>

            <div class="item center-text">
                <div class="status status-r">in-review</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" onclick="window.location.href='/task'">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>


    </div>
@endsection
