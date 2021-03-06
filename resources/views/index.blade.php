<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php challenge</title>
  </head>
  <body>
    <h1>Groups Homepage</h1>
    <a href="/group/create">create group</a>

    @if(Session::has('flash_message'))
    <div style="background-color:green;">
        {{ Session::get('flash_message') }}
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

    @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <button type="button" onclick="sort()" name="button">Sort</button>

    <section id="sortSection">
    @foreach ($groups as $group)
      <div class="group" title="{{$group->title}}">
        <h2><a href="{{ URL::to('group/show/' . $group->id) }}">{{$group->title}}</a></h2>
        <a href="{{ URL::to('group/delete/' . $group->id) }}">delete</a>
        <a href="{{ URL::to('group/edit/' . $group->id) }}">edit</a>
      </div>
    @endforeach
    </section>


    <script type="text/javascript" src="{{ asset('js/sort.js') }}"></script>

  </body>
</html>
