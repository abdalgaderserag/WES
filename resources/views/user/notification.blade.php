@extends('layouts.main')

@section('main')
    <div class="section" id="main">
        <div class="item-row flex">
            <div>Notifications</div>
            <div>Actions</div>
        </div>
        <div class="item-row flex">
            <div>task reviewed and accepted</div>
            <div>
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>

        <div class="item-row flex">
            <div>task reviewed and accepted</div>
            <div>
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>


        <div class="item-row flex">
            <div>task reviewed and accepted</div>
            <div>
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>
        <div class="item-row flex">
            <div>task reviewed and rejected</div>
            <div>
                <img src="{{ url('svg/view.svg') }}">
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>
        <div class="item-row flex">
            <div>new task have been added</div>
            <div>
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>
    </div>
@endsection
