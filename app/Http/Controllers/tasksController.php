<?php

namespace App\Http\Controllers;

use App\Tasks;
use Session;
use Illuminate\Http\Request;

class tasksController extends Controller
{

    public function create()
    {
      redirect('/');
    }


    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'group_id' => 'required'
      ]);

      $id = $request->group_id;

      $input = $request->all();

      Tasks::create($input);

      Session::flash('flash_message_add', 'Task successfully added!');

      return redirect('/group/show/'.$id);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $task = Tasks::findOrFail($id);

      return view('tasks/edit',compact('task'));
    }


    public function update(Request $request, $id)
    {
      $task = Tasks::findOrFail($id);

      $this->validate($request, [
          'title' => 'required'
      ]);

      $input = $request->all();

      $task->fill($input)->save();

      Session::flash('flash_message_update', 'Task successfully updated!');

      return redirect('/group/show/'.$task->group_id);
    }


    public function destroy($id)
    {
      $task = Tasks::findOrFail($id);

      $page_id = Tasks::where('id', $id)->get()->first();

      //dd($page_id['group_id']);
      $task->delete();

      Session::flash('flash_message_delete', 'Task successfully deleted!');

      return redirect('/group/show/'.$page_id['group_id']);
    }
}
