@extends('master.master')

@section('content')

    <div class="p-3">
        <h1>Post Detail</h1>
    
        <img src="{{ $post->image }}" class="w-100">
    
        <p>{{ $subject->name }}</p>
    
        <p>{{ $post->created_at->format('d M Y') }} | {{ $user->name }}</p>
    
        <p>{{ $post->description }}</p>
    </div>


@endsection