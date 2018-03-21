<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <h1>This is the Edit for Tasks</h1>
    <a href="{{url('/group/show/'. $task->group_id)}}">Terug</a>

    <form method="post" action="{{ URL::to('tasks/update/' . $task->id) }}" >
      @method('PUT')
      @csrf
      <input type="text" name="title" value="{{$task->title}}">
      <button type="submit">save</button>
    </form>


  </body>
</html>
