@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ url('css/task.css') }}">
@endsection

@section('main')

    <div class="task-title">
        <h2>Add the salary review</h2>
        <h4>khalid ahmed</h4>
    </div>

    <div class="task">
        <div class="item-row">
            Description :
        </div>
        <div class="content">
            asdakj jkahs lj laskd lasj dal kajlh jhak laks hkal kahs lak hlaskh laskh lkash alk hakslhd lakshdl klhalsh asdakj jkahs lj laskd lasj dal kajlh jhak laks hkal kahs lak hlaskh laskh lkash alk hakslhd lakshdl klhalsh asdakj jkahs lj laskd lasj dal kajlh jhak laks hkal kahs lak hlaskh laskh lkash alk hakslhd lakshdl klhalsh asdakj jkahs lj laskd lasj dal kajlh jhak laks hkal kahs lak hlaskh laskh lkash alk hakslhd lakshdl klhalsh
        </div>
    </div>

    <div class="task">
        <div class="item-row">
            Attachments :
        </div>
        <div class="content">
            <a href="#">sadasd.jpg</a><br>
            <a href="#">movie.mp4</a><br>
            <a href="#">sheet.xlx</a>
        </div>
    </div>

    <div class="flex" style="margin: 20px 3%;justify-content: flex-start;flex-direction: row-reverse;">
        <button class="button button-1">submit</button>
        <button class="button button-2">message</button>
    </div>
@endsection
