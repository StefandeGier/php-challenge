<?php

namespace App\Http\Controllers;

use App\Group;
use App\Tasks;
use Illuminate\Http\Request;
use Session;

class groupController extends Controller
{
    public function index()
    {
        //
        $groups = Group::all();

        return view('index', compact('groups'));
    }


    public function create()
    {
        //
        return view('group/create');
    }


    public function store(Request $request)
    {

      $this->validate($request, [
        'title' => 'required'
      ]);

      $input = $request->all();

      Group::create($input);

      Session::flash('flash_message', 'Task successfully added!');

      return redirect('/');

    }

    public function show($id)
    {
      $group = Group::findOrFail($id);
      $tasks = Tasks::where('group_id', $id)->get();
      //return view('group/show')->withGroup($group,$tasks);
      return view('group/show',compact('tasks','group'));

    }


    public function edit($id) // hier hoort een $id te staan
    {
        $group = Group::findOrFail($id);

        return view('group/edit')->withGroup($group);
    }


    public function update(Request $request, $id)
    {

      $group = Group::findOrFail($id);

      $this->validate($request, [
          'title' => 'required'
      ]);

      $input = $request->all();

      $group->fill($input)->save();

      Session::flash('flash_message_update', 'Group successfully updated!');

      return redirect('/');
    }


    public function destroy($id)
    {

      $group = Group::findOrFail($id);

      $task = Tasks::where('group_id', $id);

      $task->delete();
      $group->delete();

      Session::flash('flash_message_delete', 'Group successfully deleted!');

      return redirect('/');
    }
}
