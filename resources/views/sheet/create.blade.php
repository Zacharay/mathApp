@extends("layouts.app")

@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj Arkusz</h1>
    <form method="POST" action="xd">
        <label for="rok_arkusza" class="text-2xl font-bold mb-2 tracking-wider">Rok</label>
        <input id="rok_arkusza"type="number" class="block bg-slate-50 shadow-md border border-slate-100 resize-none text-lg mb-6 p-2" required/>

        <label for="miesiac"  class="text-2xl font-bold tracking-wider mb-2">Miesiac</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="miesiac">
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
        <label for="typ_arkusza"  class="text-2xl font-bold tracking-wider mb-2">Typ Arkusza</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="typ_arkusza">
            <option>Główny</option>
            <option>Dodatkowy</option>
            <option>Próbny</option>
        </select>
       
        <h2 class="text-2xl font-bold tracking-wider mb-2">Formuła</h2>
        <div class="flex gap-8 mb-8">
            <label class="text-xl"><input type="radio" name="formula" value="nowa_formula"/> Stara Formuła</label>
            <label class="text-xl"><input type="radio" name="formula" value="stara_formula" checked/> Nowa Formuła</label>
        </div>
        <h2 class="text-2xl font-bold tracking-wider mb-2">Poziom</h2>
        <div class="flex gap-8 mb-8">
            <label class="text-xl"><input type="radio" name="poziom" value="podstawowy"/> Podstawowy</label>
            <label class="text-xl"><input type="radio" name="poziom" value="rozszerzony" checked/> Rozszerzony</label>
        </div>
        <div class="live-preview mb-4"></div>
        <button class="btn block">Dodaj</button>
    </form>
</div>

@endsection