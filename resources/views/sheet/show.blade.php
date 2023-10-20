@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto my-32">
    <h1 class="text-4xl text-center uppercase font-medium tracking-wider mb-10">
        Matura {{$sheet->month}} {{$sheet->year}}  {{$sheet->type}}
    </h1>
    <div class=" flex flex-col gap-4 ">
        @for ($i=1;$i<=$sheet->taskCount;$i++)
        @php
            $currentTask = null;
            foreach($tasks as $task){
                if($task['task_nr']==$i)
                {
                    $currentTask = $task;
                }
            }
        @endphp
        @if ($currentTask)
            <div class="bg-slate-50 shadow-sm border-2 border-slate-200 cursor-pointer py-4 px-8 task-container">
        @else
            <a class="bg-slate-50 shadow-sm border-2 border-slate-200 cursor-pointer py-4 px-8" href="{{route('task.create',['sheet_id'=>$sheet->id,'task_nr'=>$i])}}">
        @endif
            <div class="flex justify-between items-center">
                <h2 class="text-2xl">Zadanie {{$i}}</h2>
                @if ($currentTask)
                    <i class="fa-solid fa-chevron-down text-4xl text-slate-700"></i>
                @else
                    <i class="fa-solid fa-plus text-4xl text-slate-700"></i>
                @endif
            </div>
             @if ($currentTask)
             <div class="mt-4 task-active">
                <h3 class="text-2xl font-bold tracking-wide mb-2">Dział</h3>
                <ul class="flex gap-4">
                <li class="shadom-sm bg-gray-100 uppercase tracking-wide text-xl border-slate-400 border-2 p-2 rounded-md">Prawdopodobieństwo</li>
                </ul>
                <div class="mt-4 flex justify-between">
                    <div class="flex gap-8 items-center ">
                         <a href="#" class="text-lg flex items-center gap-2 text-blue-600"><i class="fa-solid fa-scroll"></i> Wyświetl</a>
                         <a href="#" class="text-lg flex items-center gap-2 text-green-600"><i class="fa-solid fa-check  text-2xl"></i> Oznacz jako ukończone</a>
                    </div>
                    <div class="flex gap-8 items-center ">
                        <a href="#" class="text-lg flex items-center gap-2 text-blue-600"><i class="fa-solid fa-pencil"></i> Edytuj</a>
                        <a href="#" class="text-lg flex items-center gap-2 text-red-500"><i class="fa-solid fa-trash"></i> Usuń</a>
                    </div>                               
                </div>
            </div>
             @endif
        @if ($currentTask)
            </div>
        @else
            </a>
        @endif 
            
        @endfor
    
</div>

@endsection