{{-- Kalo gak pak .blade. --}}

{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> --}}

@extends('layout')

@section('content')

<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <p>no listings found</p>
@endif

@foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach    

@endsection