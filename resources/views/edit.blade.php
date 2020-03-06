@extends('layout')

@section("content")

<div class="container">
  <h2>Add New Receipe</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form method="POST" action="/receipe/{{ $receipe->id }}">
    {{ method_field("PATCH") }}
  	{{ csrf_field() }}
    
  <div class="form-group">
    <label for="exampleInputEmail1">Receipe  Name</label>
    <input type="text" class="form-control" name="name" value="{{ $receipe->name }}" required >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Ingredients</label>
    <input type="text" class="form-control" name="ingredients" value="{{ $receipe->ingredients  }}" required >
  </div>
  <div class="form-group ">
     <label for="exampleInputPassword1">Category</label>
    <input type="text" name="category" class="form-control" value="{{ $receipe->category }}" required >
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
 @endsection