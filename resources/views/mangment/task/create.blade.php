@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')

    <div id="main" class="flex">
        <livewire:tasks.create id="{{ $id }}"/>
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
