<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    @foreach($select as $post)
       <p><h2>{{ $post->name }}</h2></p>
       <p>{{ $post->text }}</p>
       <br>
       <p>----------------------------------------------------------------------------------------------</p>
       <br>
    @endforeach
</body>
</html>
