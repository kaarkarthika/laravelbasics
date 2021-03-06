<!DOCTYPE html>
<html>
<head>
<title>Add Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<br>
    <h2 class="text-center">Edit Post</h2>
     @if(Session::has('post_updated'))
            <div class="alert alert-success" role="alert">
                {{Session::get('post_updated')}}
            </div>
            @endif
    <form method="Post" action="{{route('post.update')}}">
      @csrf
      <input type="hidden" name="id" value ="{{$post->id}}" />
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="usr">Title</label>
                    <input type='text'class="form-control" name='title' value="{{$post->title}}">
                </div>
                <div class="col-6">
                    <label for="usr">Description</label>
                    <input type="text" class="form-control" name='body' value="{{$post->body}}">
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-success text-center" value="Update" />
      </form>
  </div>

</body>
</html>