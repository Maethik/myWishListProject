@extends('layout')
@section('title', 'Tableau de bord')
@section('content')
<div>
    @include('include/header')
    @section('header-title', 'Tableau de bord')
    <div class="w-full min-h-screen">
        @if ($result == 1)
            @include('include/listsdisplayer')
        @else
            @include('include/thereisnolists')
        @endif
    </div>
</div>
@endsection