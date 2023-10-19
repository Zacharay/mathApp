@extends("layouts.app")

@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj zadanie</h1>
    <form method="POST" action="xd">
        <label for="nazwa_arkusza" class="text-2xl font-bold mb-2 tracking-wider">Arkusz</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="nazwa_arkusza">
            Wybierz arkusz:
            <option>Maj 2023 CKE</option>
            <option>Maj 2023 CKE</option>
            <option>Maj 2023 CKE</option>
            <option>Maj 2023 CKE</option>
        </select>
        <label for="numer_zadania"  class="text-2xl font-bold tracking-wider mb-2">Numer Zadania</label>
        <select class="mb-8 text-xl bg-slate-100 rounded shadow-md px-4" id="nazwa_arkusza">
            Wybierz arkusz:
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <label for="tresc_zadania" class="text-2xl font-bold tracking-wider mb-2">Treść Zadania</label>
        <textarea id="tresc_zadania"class="block bg-slate-50 shadow-md border border-slate-100 resize-none w-full h-48 text-lg mb-6 p-2"></textarea>
        <div class="live-preview mb-4">dsadaskdjasdkahjdskasdjhkasdjsdakhasdjdash</div>
        <button class="btn block">Dodaj</button>
    </form>
</div>

@endsection