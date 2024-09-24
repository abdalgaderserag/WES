@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/mangment.css') }}">
@endsection

@section('main')
    <h1 class="header-title">Workers:</h1>

    <livewire:management.workers />


    <br><br><br>
    <h1 class="header-title">Tasks:</h1>
    <livewire:tasks.index/>

@endsection
