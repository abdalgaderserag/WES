@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/mangment.css') }}">
@endsection

@section('main')
    <h1 class="header-title">Workers:</h1>

    <livewire:management.workers />


    <br><br><br>
    <h1 class="header-title">your tasks:</h1>
    <livewire:tasks.index/>

    <h1 class="header-title">employ tasks:</h1>
    <livewire:tasks.employ/>

@endsection
