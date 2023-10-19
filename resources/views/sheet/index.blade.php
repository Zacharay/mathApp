
@extends('layouts.app')

@section('content')

<div class="container max-w-3xl mx-auto my-32">
    <h1 class="text-6xl text-center uppercase font-medium tracking-wider mb-10">Arkusze</h1>
    <div class=" flex flex-col gap-4 ">
            @forelse ($sheets as $sheet)
            <a class="bg-slate-50 shadow-sm border-2 border-slate-200 cursor-pointer py-4 px-8 flex justify-between items-center" href="{{route('sheet.show',['sheet'=>$sheet->id])}}">
                        <div>
                            <h2 class="text-2xl">Matura {{$sheet->month}} {{$sheet->year}} {{$sheet->type}}</h2>
                            <div class="flex gap-8"> 
                                <h3 class="text-lg">{{$sheet->isExtended?'Rozszerzona':'Podstawowa'}}</h3>
                                <h3 class="text-lg">{{$sheet->isNewFormula?'Nowa Formuła':'Stara Formuła'}}</h3>
                            </div>
                            
                        </div>
                        <div>
                            <h3>Ilość Wykonanych Zadań:</h3>
                            <div class="text-center">0/{{$sheet->taskCount}}</div>
                        </div>
            </a>
        @empty
            
        @endforelse
    </div>

</div>


@endsection