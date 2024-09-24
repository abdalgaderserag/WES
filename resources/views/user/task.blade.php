@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/task.css') }}">
@endsection

@section('main')
    <livewire:tasks.view id="{{ $id }}"/>
@endsection
