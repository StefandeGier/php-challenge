<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create</title>
  </head>
  <body>
    <h1>This is the Create for groups</h1>
    <a href="/">terug</a>
      <form method="P0ST" action="/group" >
        {{ csrf_field()}}
        <input type="text" name="title" value="">
        <button type="submit">Create</button>
      </form>
  </body>
</html>
