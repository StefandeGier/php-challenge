<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Create</title>
  </head>
  <body>
    <h1>This is the Create for groups</h1>

    <a href="/">terug</a>
      <form method="post" action="{{url('/group/store')}}" >
        @csrf
        <input type="text" name="title" value="">
        <button type="submit">Create</button>
      </form>
  </body>
</html>
