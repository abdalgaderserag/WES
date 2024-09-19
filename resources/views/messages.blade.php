@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')
    <div id="main" class="flex">
        <div id="message-view">

            <div class="section">
                <div class="item-row">
                    Ahmed khalid
                </div>
                <div class="item-row" style="padding: 24px 10px">
                    <div class="message-block">
                        <div class="message message-sender">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                        <div class="message message-sender">sdgsdgsdgs sfsdf sdfsfsf sd  sdfsdfdsfdsf dfsfsfs sdfsfs dsfsd sdfs fe erg er</div>
                        <div class="message message-sender">sadasd efwfd fd.</div>
                    </div>

                    <div class="message-block sender">
                        <div class="message">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                        <div class="message">sadasd efwfd fd.</div>
                    </div>

                    <div class="message-block">
                        <div class="message message-sender">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                    </div>

                    <div class="message-block sender">
                        <div class="message">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                        <div class="message">sadasd efwfd fd.</div>
                    </div>
                </div>
            </div>

            <div class="flex" style="margin: 0 3%">
                <input id="input-text" type="text" name="message">
                <div id="input-actions">
                    <button class="button">Send</button>
                </div>
            </div>
        </div>
        <div class="section" id="contact-view">
            <div class="item-row">
                Contacts
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
