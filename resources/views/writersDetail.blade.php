@extends('master.master')

@section('content')

    <p>Writers Detail</p>

    <img src="/minion.jpg" class="rounded-circle" style="width: 5rem; height: 5rem;" >

    <p>{{$user->name}}</p>

    <div class="p-3">
        @foreach($postList as $post)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/minion.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $post->subject->name }}</h5>
                            <p class="card-text"><small class="text-body-secondary">{{ $post->created_at }}</small></p>
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