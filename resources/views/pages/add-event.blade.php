@extends('main')
@section('content')
<h2>CREATE EVENT</h2>
@include('_partials/errors')

<form action="/storeEvent" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="event" placeholder="Event Name" >
      </div>
      <div class="form-group">
        <input type="datetime-local" class="form-control" name="date" placeholder="Event Date">
      </div>
      <div class="form-group">
        <textarea name="description" id="" cols="30" row="10" class="form-control" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
        <label>Picture:</label>
        <input type="file" name="picture" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary" >SAVE</button>
    </form>
@endsection