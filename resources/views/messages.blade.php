@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')
    <div id="main" class="flex">
        <div id="message-view">

            <div class="section">
                <div class="item-row" style="border-radius: 4px">
                    Ahmed khalid
                </div>
                <div style="padding: 24px 10px;background-color: #e4e8ed">
                    <div class="message-block">
                        <div class="message message-sender">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                        <div class="message message-sender">sdgsdgsdgs sfsdf sdfsfsf sd  sdfsdfdsfdsf dfsfsfs sdfsfs dsfsd sdfs fe erg er</div>
                        <div class="message message-sender">sadasd efwfd fd.</div>
                    </div>

                    <div class="message-block sender">
                        <div>
                            <div class="message">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                            <div class="message">sadasd efwfd fd.</div>
                        </div>
                        <div>
                            <img src="{{ url('images/astr.png') }}" style="width: 36px;border-radius: 50%;">
                        </div>
                    </div>

                    <div class="message-block">
                        <div class="message message-sender">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                    </div>

                    <div class="message-block sender">
                        <div>
                            <div class="message">dssdfd fssfsd fsdfs sdf sdf sdf</div>
                            <div class="message">sadasd efwfd fd.</div>
                        </div>
                        <div>
                            <img src="{{ url('images/astr.png') }}" style="width: 36px;border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section flex input-message">
                <input placeholder="enter message here" type="text" name="message">
                <img src="{{ url('svg/link.svg') }}" style="margin-right: 1%">
                <img src="{{ url('svg/send.svg') }}">
            </div>
        </div>
        <div class="section" id="contact-view">
            <div class="item-row">
                Contacts
            </div>


            <div class="item-row info-card">
                <img class="info-img info-img-disconnected" src="{{ url('/images/ariya.jpg') }}">
                <div class="info-text">
                    <div class="info-name">Khalid Omar</div>
                    <div class="info-job" style="margin-top: -1px">supervisor</div>
                </div>
            </div>

            <div class="item-row info-card">
                <img class="info-img" src="{{ url('/images/avatar.jpg') }}">
                <div class="info-text">
                    <div class="info-name">Ahmed Xin</div>
                    <div class="info-job" style="margin-top: -1px">employ</div>
                </div>
            </div>

            <div class="item-row info-card">
                <img class="info-img info-img-away" src="{{ url('/images/astr.png') }}">
                <div class="info-text">
                    <div class="info-name">Rebecca Jon</div>
                    <div class="info-job" style="margin-top: -1px">employ</div>
                </div>
            </div>


            <div class="item-row info-card">
                <img class="info-img" src="{{ url('/images/default.jpeg') }}">
                <div class="info-text">
                    <div class="info-name">zayn silver</div>
                    <div class="info-job" style="margin-top: -1px">employ</div>
                </div>
            </div>
        </div>
    </div>
@endsection
