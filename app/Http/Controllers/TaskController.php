<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //

    public function index(){

        if (auth()->check()){
            $id=Auth::user()->id;
            $tasks=Task::where('user_id',$id)->get();


            return view('tasks.index',[
                'tasks'=> $tasks
            ]);
        } else {
            return view('tasks.index');
        }

    }

    public function create()
    {
        return view('tasks.create');
    }
    public function store(){



              $attributes=   request()->validate([

            'title'=>['required','min:5','max:255'],
            'description'=>['required','min:15','max:255']
        ]);

        $attributes['user_id']=Auth::user()->id;

//        dd(Auth::user()->id);

        Task::create($attributes);
//        session()->flash('success','New task addedd');
        return redirect('/')->with('success', 'New task added.');
    }

    public function destroy(Task $task){
        $task->delete();
        return back()->with('success', 'Congratulations you completed the task');

    }

}
