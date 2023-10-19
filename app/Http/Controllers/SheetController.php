<?php

namespace App\Http\Controllers;

use App\Http\Requests\SheetRequest;
use App\Models\Sheet;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sheets = Sheet::all();
        return view('sheet.index',['sheets'=>$sheets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sheet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sheet = new Sheet();
        $sheet->year = $request->year;
        $sheet->month = $request->month;
        $sheet->type = $request->type;
        $sheet->isNewFormula = $request->isNewFormula;
        $sheet->isExtended = $request->isExtended;
        $sheet->taskCount = $request->taskCount;
        $sheet->save();
        return redirect()->route('sheet.index')->with('success','Sheet created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sheet = Sheet::find($id);
        return view('sheet.show',['sheet'=>$sheet]);
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
