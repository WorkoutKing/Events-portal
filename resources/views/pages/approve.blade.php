@extends('main')
@section('content')
<div class="container" style="width:100%;min-height: 40rem;">
<div class="row">
@foreach($guest as $guest)
@if(auth()->user()->id === $guest->events->user_id)
@if($guest->status === 0)
     <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Event:{{$guest->events->event}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Phone:{{$guest->phone}}</h6>
        <p class="card-text">Name:{{$guest->name}}</p>
        <p class="card-text">{{$guest->email}}</p>
        <a href="/deleteGuest/guest/{{$guest->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want delete it?')">Delete</a>
        <a href="/updateGuest/guest/{{$guest->id}}" class="btn btn-success">Awaiting approval</a>
      </div>
    </div>
    @endif
    @endif
  @endforeach
  </div>
</div>
@endsection
