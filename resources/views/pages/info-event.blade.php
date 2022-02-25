@extends('main')
@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Event information</h2>
        <div class="card" style="width: 30rem;">
            <div class="card-body" >
                <h2 class="card-title" style="color:blue">Event name: <p>{{$events->event}}</p></h2>
                <div style="color: darkgreen">
                <p class="card-text">Date: {{$events->date}}</p>
                <p class="card-text">Description: {{$events->description}}</p>
                </div>
            </div>
            <div class="card-footer">
                @if($events->picture)
                    @if(Str::startsWith($events->picture, 'http') === true)
                        <img style="width: 15em" src="{{$events->picture}}" alt="">
                    @endif
                    <img style="width: 15rem" src="{{ asset('/storage/'.$events->picture) }}" alt="">
                @endif
            </div>
            <a href="/register-event/{{$events->id}}" class="btn btn-primary">Registration to event</a>
        </div>
    </div>
@endsection