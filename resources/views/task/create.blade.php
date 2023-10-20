@extends("layouts.app")

@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj zadanie</h1>
    <form method="POST" action="{{route('task.store')}}">
        @csrf
        <input type="hidden" name='sheet_id' value="{{$sheet->id}}"/>
        <input type="hidden" name='task_nr'  value="{{$taskNr}}"   />

        <h2 class="text-2xl font-bold tracking-wide">Matura {{$sheet->month}} {{$sheet->year}} {{$sheet->type}}</h2>
        <h2 class="text-xl font-bold tracking-wide mb-8">Zadanie {{$taskNr}}</h2>
        <label for="category" class="text-xl font-bold tracking-wider mb-2">Category</label>
        <select class="mb-6 text-xl bg-slate-100 rounded shadow-md px-4" id="category" name="category_id">
            @foreach ($categories as $category)
                 <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach 
        </select>
        <label for="description" class="text-xl font-bold tracking-wider mb-2">Treść Zadania</label>
        <textarea id="description"class="block bg-slate-50 shadow-md border border-slate-100 resize-none w-full h-48 text-lg mb-6 p-2" oninput="updatePreview()" name="description"></textarea>
        <div class="mb-4 text-xl" id="live-preview"></div>

        <button class="btn block">Dodaj</button>
    </form>
</div>

@endsection
<script>
function updatePreview(){
    const mathInput = document.getElementById('description').value;

    const renderedExpression = mathInput.replace('<bold>','<span class="font-bold">').replace('</bold>','</span>').replace('</br>','<br>')
    document.getElementById('live-preview').innerHTML = `${renderedExpression}`;

    MathJax.Hub.Queue(['Typeset', MathJax.Hub, 'live-preview']);
  }

</script>