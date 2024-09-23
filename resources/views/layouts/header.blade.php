<div id="header">
    <div id="logo" onclick="window.location.href='/'">
        W.E.S.
    </div>
    <div id="info">

        <div id="profile" class="flex" onclick="showProfileMenu()">
            <div class="flex">
                <img class="info-img" src="{{ url('/images/avatar.jpg') }}">
                <div class="info-text">
                    <div class="info-name">Ahmed Xin</div>
                    <div class="info-job" style="margin-top: -1px">employ</div>
                </div>
            </div>
            <div id="profile-menu">
                <div><img src="{{ url('svg/profile.svg') }}" alt=""></div>
                <div><img src="{{ url('svg/setting.svg') }}" alt=""></div>
                <div><img src="{{ url('svg/lang.svg') }}" alt=""></div>
                <div><img src="{{ url('svg/logout.svg') }}" alt=""></div>
            </div>
            <div>
{{--                <img src="{{ url('svg/expand.svg') }}">--}}
                <svg xmlns="http://www.w3.org/2000/svg" height="24" fill="#4a5568" viewBox="0 -960 960 960" width="24"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>

            </div>
        </div>


        <div id="notifications">
            <img src="{{ url('/svg/notification.svg') }}" onclick="window.location.href='notifications'">
        </div>
        <div id="messages">
            <img src="{{ url('/svg/message.svg') }}" onclick="window.location.href='messages'">
        </div>
    </div>
</div>


