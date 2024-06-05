@extends('layout.master')

@section('head')
@endsection

@section('content')
<!-- Auth::user()->role == 'admin' -->
    @if($role == 'admin')
        @include('homeAdmin')
    @elseif($role == 'customer')
        @include('homeCust')
    @else
        @include('homeGuest')
    @endif
@endsection

