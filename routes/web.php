<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = \App\Task::orderBy("created_at", "asc")->get();
    return view('task', ["tasks"=>$tasks]);
});

Route::post('/task', function(\Illuminate\Http\Request $request){

    $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
        'name' => 'required|max:255'
    ]);

    if($validator->fails()){
        return redirect('/')->withInput()->withErrors($validator);
    }

    $task = new \App\Task();
    $task->name = $request->name;
    $task->save();
    return redirect("/");
});

Route::delete("/task/{task}", function(\App\Task $task){
    $task->delete();
    return redirect("/");
});

Route::get('/contacts',  "ContactsController@index");