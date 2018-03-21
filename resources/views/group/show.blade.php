<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Show</title>
  </head>
  <body>
    <a href="/">Terug</a>
    @if(Session::has('flash_message_add'))
    <div style="background-color:green;">
        {{ Session::get('flash_message_add') }}
    </div>
    @endif
    @if(Session::has('flash_message_delete'))
    <div style="background-color:green;">
        {{ Session::get('flash_message_delete') }}
    </div>
    @endif

    @if(Session::has('flash_message_update'))
    <div style="background-color:green;">
        {{ Session::get('flash_message_update') }}
    </div>
    @endif
    <h1>{{ $group->title }}</h1>
      <form action="{{url('/tasks/store')}}" method="post">
        @csrf
        <input style="display:none;" type="text" name="group_id" value="{{$group->id}}">
        <input type="text" name="title" value="">
        <button type="submit">Add</button>
        <br>
      </form>

      @foreach ($tasks as $task)
        {{$task->title}}
        <a href="{{ URL::to('tasks/delete/' . $task->id) }}">delete</a>
        <a href="{{ URL::to('tasks/edit/' . $task->id) }}">edit</a>
        <br>
      @endforeach

      

  </body>
</html>
