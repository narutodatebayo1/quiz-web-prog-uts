@extends('master.master')

@section('content')

    <p>{{ $category->name }}</p>

    <div class="p-3">
        @foreach($subjectList as $subject)
            @foreach($subject->post as $post)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $post->image }}" class="img-fluid rounded-start w-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $subject->name }}</h5>
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
        @endforeach
    </div>

@endsection