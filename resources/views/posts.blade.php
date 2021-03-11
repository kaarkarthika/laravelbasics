<!DOCTYPE html>
<html>
<head>
<title>All Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
           <h3 style="text-align: center;"> All Posts </h3>
        </div>
        <div class="card-body">
            @if(Session::has('post_deleted'))
            <div class="alert alert-success" role="alert">
                {{Session::get('post_deleted')}}
            </div>
            @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Post Title</th>
                <th>Post Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                     <td>
                         <a class="btn btn-primary" href="/insert/{{$post->id}}">View</a>
                         <a class="btn btn-warning" href="/edit-post/{{$post->id}}">Edit</a>
                         <a class="btn btn-danger" href="/delete-post/{{$post->id}}">Delete</a>
                     </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>
