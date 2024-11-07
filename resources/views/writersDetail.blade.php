@extends('master.master')

@section('content')


    <div class="p-3">
        <h1>Writers Detail</h1>
        
        <img src="{{ $user->image }}" class="rounded-circle" style="width: 5rem; height: 5rem;" >
        
        <p>{{$user->name}}</p>
        
        @foreach($postList as $post)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $post->image }}" class="img-fluid rounded-start w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $post->subject->name }}</h5>
                            <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->format('d M Y') }} | {{ $post->user->name }}</small></p>
                            <p class="card-text">{{ $post->description }}</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('postDetail', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection