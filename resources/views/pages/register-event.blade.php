@extends('main')
@section('content')
<h2>Register to event:</h2>
@include('_partials/errors')

<form action="/storeReg" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group invisible">
        <textarea name="events_id" cols="1" row="1" class="form-control" >{{$events->id}}</textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Your Name" >
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="phone" class="form-control" name="phone" placeholder="Phone number">
      </div>
    <button type="submit" class="btn btn-primary" >Register</button>
    </form>
@endsection