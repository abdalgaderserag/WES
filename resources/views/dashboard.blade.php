@extends('layouts.main')

@section('main')

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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
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
                <img src="{{ url('/svg/view.svg') }}">
                <img src="{{ url('/svg/chat.svg') }}">
            </div>
        </div>




    </div>
@endsection
