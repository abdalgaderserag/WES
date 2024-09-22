@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')

    <div id="main" class="flex">
        <div id="message-view">

            <div class="section">
                <div class="item-row">
                    Add new task
                </div>
                <div class="item-row" style="padding: 24px 10px">
                    <input class="input-text" type="search" name="select-employ" id="employ-select" placeholder="search employ">
                    <br>
                    <br>
                    <textarea class="input-area input-text" placeholder="task description"></textarea><br>
                    <label for="files">attach images, videos and files :</label>
                    <input class="input-text" type="file">
                    <button class="button" type="submit">send</button>
                </div>
            </div>
        </div>
        <div class="section" id="contact-view">
            <div class="item-row">
                Employ
            </div>
            <div class="item-row">
                khalid ahmed
            </div>
            <div class="item-row">
                khalid ahmed
            </div>
            <div class="item-row">
                khalid ahmed
            </div>
        </div>
    </div>
@endsection
