@extends('main')
@section('content')
<div class="container">
<div class="row">
    @foreach($events as $event)
    @if(auth()->user()->id === $event->user_id)
        <div class="card" style="width: 14rem;">
            <img class="card-img-top" style="width:200px;height:230px;"  src="{{ asset('/storage/'.$event->picture) }}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$event->event}}</h5>
                <h5>Time:</h5>  
                <b>{{$event->date}}</b>              
                Description:<p class="card-text">{{$event->description}}</p>
                <a href="/delete/event/{{$event->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to remove it?')">delete</a>
                <a href="/update/event/{{$event->id}}" class="btn btn-success">update</a>            
            </div>
        </div>
        @endif
    @endforeach
</div>    
</div>
@endsection