<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>update form</h1>

    <form action="{{route('updateBook', ['id' => $book->id])}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->title}}" placeholder="input title">

        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name= "author" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->author}}" placeholder="input author">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release date</label>
            <input name= "release" type="date" class="form-control" id="formGroupExampleInput" value="{{$book->release}}" placeholder="input release">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input name= "price" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->price}}" placeholder="input price">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
