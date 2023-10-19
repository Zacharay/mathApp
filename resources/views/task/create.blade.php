@extends("layouts.app")

@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj zadanie</h1>
    <form method="POST" action="xd">
        <h2>Matura {{$sheet->month}} {{$sheet->year}} {{$sheet->type}}</h2>
        <h2>Zadanie {{$taskNr}}</h2>
        <label for="tresc_zadania" class="text-2xl font-bold tracking-wider mb-2">Treść Zadania</label>
        <textarea id="tresc_zadania"class="block bg-slate-50 shadow-md border border-slate-100 resize-none w-full h-48 text-lg mb-6 p-2"></textarea>
        <div class="live-preview mb-4"></div>
        <button class="btn block">Dodaj</button>
    </form>
</div>

@endsection