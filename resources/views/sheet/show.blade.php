@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto my-32">
    <h1 class="text-4xl text-center uppercase font-medium tracking-wider mb-10">
        Matura {{$sheet->month}} {{$sheet->year}}  {{$sheet->type}}
    </h1>
    <div class=" flex flex-col gap-4 ">
        @for ($i=1;$i<=$sheet->taskCount;$i++)
        <a class="bg-slate-50 shadow-sm border-2 border-slate-200 cursor-pointer py-4 px-8 flex justify-between items-center" href="{{route('task.create',['sheet_id'=>$sheet->id,'task_nr'=>$i])}}">
            <h2 class="text-2xl">Zadanie {{$i}}</h2>
            <i class="fa-solid fa-plus text-4xl text-slate-700"></i>
        </a>
            
        @endfor
        
    </div>

</div>

@endsection