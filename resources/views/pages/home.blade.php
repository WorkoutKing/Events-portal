@extends('main')
@section('content')


<div class="container" style="margin-top:40px" >
    <div class="d-inline-flex p-2 gap-5">
        <div >
        <img src="https://media.istockphoto.com/vectors/upcoming-events-neon-signs-vector-upcoming-events-design-template-vector-id978975308?k=20&m=978975308&s=612x612&w=0&h=HnwHCKofUyVji7q4Vqpg9VI0avrWdF8hr-nA5EATfmk=" 
        alt="" style="height:400px;width:600px">
        </div>
    <div>
        <h2>Info about project</h2>
        <p>Super duper event project, where you can book in event.</p>
        <a class="btn btn-primary" href="/all-events">All events</a>
    </div>
    </div>
</div>


<div class="container" style="margin-top:40px">
    <div class="p-3 mb-2 bg-dark text-white" style="text-align: center">
        <p>ALL EVENTS IN ONE PLACE</p>
    </div>
</div>


<div class="container" style="margin-top:40px">
    <div class="row gap-5">
        @foreach($events as $event)
            <div class="card" style="width: 20rem;">
                <div class="card-body ">
                    <h5 class="card-title">{{$event->event}}</h5>         
                    <p class="card-text">{{$event->description}}</p>
                    <a href="/info-event/{{$event->id}}" class="btn btn-primary">Info and Registration event</a>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center;margin-top:20px">   
     {{$events->links()}}
     </div>
    </div>
@endsection