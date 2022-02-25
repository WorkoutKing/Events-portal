@extends('main')
@section('content')
<div class="container" style="width:100%;min-height: 40rem;">
<div class="row">
    @foreach($events as $event)
        <div class="card " style="width: 23rem;">
            <div class="card-body mr-1">
                <h5 class="card-title">{{$event->event}}</h5>              
                <p class="card-text">Description:{{$event->description}}</p>
                <a href="/info-event/{{$event->id}}" class="btn btn-primary">Info and Registration event</a>
            </div>
        </div>
    @endforeach
</div>    
</div>
@endsection