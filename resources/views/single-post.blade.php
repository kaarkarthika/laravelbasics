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
    <h2 class="text-center">Post Details</h2>
    <form>
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
        </div>
    </form>
</body>
</html>