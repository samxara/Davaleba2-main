<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form style="width: 50%; margin: 50px auto;" method="POST" action="{{route("posts_store")}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Post Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Post_title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Post Author</label>
        <input name="author_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Post_author">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Post_text</label>
        <input name="post_text" type="text" class="form-control" id="exampleInputPassword1" placeholder="Post_text">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
