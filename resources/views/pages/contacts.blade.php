@extends('main')
@section('content')
    <div class="container" style="width:100%;min-height: 40rem;">
        <h2>Contacts:</h2>
        @foreach($user as $user)
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title" style="text-transform: capitalize">{{$user->name}}</h5>
                    <p class="card-text" style="text-transform: capitalize">{{$user->email}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection