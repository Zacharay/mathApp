@extends("layouts.app")

@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj Arkusz</h1>
    <form method="POST" action="{{route('sheet.store')}}">
        @csrf
        <label for="year" class="text-2xl font-bold mb-2 tracking-wider">Rok</label>
        <input id="year"type="number" name="year" class="block bg-slate-50 shadow-md border border-slate-100 resize-none text-lg mb-6 p-2" required/>
        @error('year')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="month"  class="text-2xl font-bold tracking-wider mb-2">Miesiac</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="month" name="month">
            <option value="Styczeń">Styczeń</option>
            <option value="Luty">Luty</option>
            <option value="Marzec">Marzec</option>
            <option value="Kwiecień">Kwiecień</option>
            <option value="Maj">Maj</option>
            <option value="Czerwiec">Czerwiec</option>
            <option value="Lipiec">Lipiec</option>
            <option value="Sierpień">Sierpień</option>
            <option value="Wrzesień">Wrzesień</option>
            <option value="Październik">Październik</option>
            <option value="Listopad">Listopad</option>
            <option value="Grudzień">Grudzień</option>
        </select>
        <label for="type"  class="text-2xl font-bold tracking-wider mb-2">Typ Arkusza</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="type" name="type">
            <option class="Główny">Główna</option>
            <option class="Dodatkowy">Dodatkowa</option>
            <option class="Próbny">Próbna</option>
        </select>
       
        <h2 class="text-2xl font-bold tracking-wider mb-2">Formuła</h2>
        <div class="flex gap-8 mb-8">
            <label class="text-xl"><input type="radio" name="isNewFormula" value="0"/> Stara Formuła</label>
            <label class="text-xl"><input type="radio" name="isNewFormula" value="1" checked/> Nowa Formuła</label>
        </div>
        <h2 class="text-2xl font-bold tracking-wider mb-2">Poziom</h2>
        <div class="flex gap-8 mb-8">
            <label class="text-xl"><input type="radio" name="isExtended" value="0"/> Podstawowy</label>
            <label class="text-xl"><input type="radio" name="isExtended" value="1" checked/> Rozszerzony</label>
        </div>
        <label for="taskCount" class="text-2xl font-bold mb-2 tracking-wider">Ilość Zadań</label>
        <input id="taskCount"type="number" name="taskCount" class="block bg-slate-50 shadow-md border border-slate-100 resize-none text-lg mb-6 p-2" required/>
        @error('taskCount')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <div class="live-preview mb-4"></div>
        <button class="btn block">Dodaj</button>
    </form>
</div>

@endsection