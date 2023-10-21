<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sheet;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($sheetID,$taskNr)
    {
        $sheet = Sheet::find($sheetID);
        $categories = Category::all();
        
        return view('task.create',['sheet'=>$sheet,'taskNr'=>$taskNr,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newTask = new Task();
        $newTask->sheet_id = $request->sheet_id;
        $newTask->category_id = $request->category_id;
        $newTask->task_nr = $request->task_nr;
        $newTask->description = $request->description;
        $newTask->save();
        $sheet = Sheet::find($request->sheet_id);
        return redirect()->route('sheet.show',['sheet'=>$sheet]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
        $sheet = Sheet::find($task->sheet_id);
        return view('task.show',['task'=>$task,'sheet'=>$sheet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        $sheet = Sheet::find($task->sheet_id);
        $categories = Category::all();
        return view('task.edit',['task'=>$task,'sheet'=>$sheet,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('task.show',['task'=>$task->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
