@extends('main')
@section('content')
<h2>CREATE COMPANY</h2>
@include('_partials/errors')

<form action="/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="company" placeholder="Company name" >
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="code" placeholder="Company code">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="vat" placeholder="PVM Code">
      </div>
      <div class="form-group">
        <select name="category" class="form-select">
            <option value="" selected>--Select category--</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
    </div>
      <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Adress">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="director" placeholder="CEO">
      </div>
      <div class="form-group">
        <textarea name="description" id="" cols="30" row="10" class="form-control" placeholder="Activity"></textarea>
      </div>
      <div class="form-group">
        <label>LOGO</label>
        <input type="file" name="logo" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary" >SAVE</button>
    </form>
@endsection