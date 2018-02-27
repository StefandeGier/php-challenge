<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show</title>
  </head>
  <body>
    <a href="/">Terug</a>
    <h1>{{ $group->title }}</h1>
    <a href="{{ URL::to('group/delete/' . $group->id) }}">delete</a>
    <a href="{{ URL::to('group/edit/' . $group->id) }}">edit</a>
  </body>
</html>
