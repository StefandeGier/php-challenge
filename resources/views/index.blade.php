<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php challenge</title>
  </head>
  <body>
    <h1>Groups Homepage</h1>
    <a href="/group/create">create group</a>
    @foreach ($groups as $group)
      <h2><a href="">{{$group->title}}</a></h2>
    @endforeach

  </body>
</html>
