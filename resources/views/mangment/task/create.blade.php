@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')

    <div id="main" class="flex">
        <livewire:tasks.create id="{{ $id }}"/>

    </div>
@endsection
