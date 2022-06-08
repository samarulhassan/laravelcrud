<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use DB;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('todo_create');
    }
    public function store(Request $request)
    {
        $newdata=new Todo;
        $newdata->name=$request->input('name');
        $newdata->email=$request->input('email');
        $newdata->phone_no=$request->input('phone_no');
        // print_r($newdata);
        // die();
        $newdata->save();
        $request->session()->flash('msg',"Data Submitted");
        return redirect('todo_show');
     }   
    public function show(Todo $todo)

    {
        $records = DB::select('select * from todos');
        $recordsarray= json_decode(json_encode($records), true);
        $count=count($recordsarray);
        // $name=$recordsarray[0]['name'];
        // print_r($count);
        // die();
        return view('todo_show',compact('recordsarray','count'));
       

    }
    public function edit(Todo $todo,$id)
    {
        // print_r($id);
        // die();
        // $records = DB::select('select * from todos where $id=id');
        $records=DB::table('todos')->where('id',$id)->get();
        $recordsarray= json_decode(json_encode($records), true);
        $count=count($recordsarray);
        return view('todo_edit',compact('recordsarray','count'));
    }
    public function update(Request $request, Todo $todo,$id)
    {
     // print_r($id);
     //    die();

        $newdata=Todo::find($request->id);
        $newdata->name=$request->input('name');
        $newdata->email=$request->input('email');
        $newdata->phone_no=$request->input('phone_no');
        $newdata->save();
        $request->session()->flash('msg',"Data Updated");
        return redirect('todo_show');
    }

    public function destroy(Todo $todo,$id)
    {
        Todo::destroy(array('id',$id));
        return redirect('todo_show');
    }
}
