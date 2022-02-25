
@extends('main')
@section('content')
    <h2>Approve event member:</h2>
    @include('_partials/errors')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
    <h5 class="card-title">Event:{{$guest->events->event}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Phone:{{$guest->phone}}</h6>
    <p class="card-text">Name:{{$guest->name}}</p>
    <p class="card-text">{{$guest->email}}</p>
</div>
</div>
    <form action="/updateGuest/{{$guest->id}}" method="post">
        @csrf
        <div class="form-group">
            <select type="text" class="form-control" name="status" >
                <option value="0" selected>Not approve</option>
                <option value="1">Approve</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" >Update</button>
    </form>
@endsection