@extends('layouts.layout')
@section('content')
    <h1>create form</h1>

    @guest
        <a href="{{route('login')}}">Login</a>
        @else
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Log out</button>

        </form>
    @endguest

    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Log out</button>

    </form>


    <form action="{{ route('createBook')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="input title">

        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name= "author" type="text" class="form-control" id="formGroupExampleInput" placeholder="input author">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release date</label>
            <input name= "release" type="date" class="form-control" id="formGroupExampleInput" placeholder="input release">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input name= "price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="input price">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input name= "genreId" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="input genre">
        </div>

        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
@endsection
