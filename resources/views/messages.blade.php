@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/messages.css') }}">
@endsection

@section('main')
    <div id="main" class="flex">
        <livewire:messages.page :username="$username" />
        <livewire:messages.contacts :username="$username" />
    </div>
@endsection

@section('script')
<script>
    let proWidth = document.getElementById('profile').offsetWidth - 4;
    document.getElementById('contact-view').style.width = proWidth + 'px';
</script>
@endsection
