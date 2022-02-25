@extends('main')
@section('content')
<h2>UPDATE EVENT</h2>
@include('_partials/errors')
<form action="/update/{{$events->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="event" placeholder="Event Name" value="{{$events->event}}">
      </div>
      <div class="form-group">
        <input type="datetime-local" class="form-control" name="date" placeholder="Event Date" value="{{$events->date}}">
      </div>
      <div class="form-group">
        <textarea name="description" id="" cols="30" row="10" class="form-control" placeholder="Description">{{$events->description}}</textarea>
      </div>
      <div class="form-group">
        <label>Picture:</label>
        <input type="file" name="picture" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary" >UPDATE</button>
    </form>
@endsection