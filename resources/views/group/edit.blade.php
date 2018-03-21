<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <h1>This is the Edit for groups</h1>
    <a href="/">Terug</a>
    <form method="post" action="{{ URL::to('group/update/' . $group->id) }}" >
      @method('PUT')
      @csrf
      <input type="text" name="title" value="{{$group->title}}">
      <button type="submit">save</button>
    </form>


  </body>
</html>
