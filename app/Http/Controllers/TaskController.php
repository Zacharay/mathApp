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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
