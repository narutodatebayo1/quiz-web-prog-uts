@extends('master.master')

@section('content')

    <p>Post Detail</p>

    <img src="{{ $post->image }}" class="w-100 p-3">

    <p>{{ $post->created_at }} | {{ $user->name }}</p>

    <p>{{ $post->description }}</p>

@endsection