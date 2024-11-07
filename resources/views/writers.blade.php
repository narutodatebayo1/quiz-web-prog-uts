@extends('master.master')

@section('content')

    <h1 class="p-3">Writers</h1>

    <div class="d-flex justify-content-evenly">
        @foreach($userList as $user)
            <a href="{{ route('writersDetail', ['id' => $user->id]) }}" class="text-black text-decoration-none">
                <img src="{{ $user->image }}" class="rounded-circle mx-auto d-block" style="width: 5rem; height: 5rem;">
                <p class="text-center fw-bold">{{$user->name}}</p>
                <p class="text-center">Spesialis {{ $user->specialty }}</p>
            </a>
        @endforeach
    </div>

@endsection