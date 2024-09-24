@extends('layouts.app')

@section('main')
    <div class="section">
        <div class="item-row">{{ $user->name }}</div>
        <div class="item-row" style="display: flex;align-items: flex-start">
            <div style="margin: 12px 2px">
                <img src="{{ url('images/avatar.jpg') }}" style="width: 210px;border-radius: 12px">
                <div style="margin-left: 12px">
                    <div style="color: #1a202c;font-size: 1.1rem;font-weight: 700">{{ $user->name }}</div>
                    <div style="font-size: 1rem">{{ '@' . $user->username }}</div>
                </div>
            </div>
            <div>
                <div>

                </div>
                <div>
                    <div>ongoing tasks: {{ $user->tasks->count() }}</div>
                    <div>completed tasks: {{ $user->tasks->count() }}</div>
                    <div>tasks taken by user: {{ $user->tasks->count() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
