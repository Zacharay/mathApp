@extends("layouts.app")

@section('content')
<div class="container mx-auto py-8 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Dodaj zadanie</h1>
    <form method="POST" action="{{route('task.update',['task'=>$task->id])}}">
        @csrf
        @method('PUT');
        <h2 class="text-2xl font-bold tracking-wide">Matura {{$sheet->month}} {{$sheet->year}} {{$sheet->type}}</h2>
        <h2 class="text-xl font-bold tracking-wide mb-8">Zadanie {{$task->task_nr}}</h2>
        <label for="category" class="text-xl font-bold tracking-wider mb-2">Kategoria</label>
        <select class="mb-6 text-xl bg-slate-100 rounded shadow-md px-4" id="category" name="category_id">
            @foreach ($categories as $category)
                 <option value="{{$category->id}}"{{$category->id==$task->category_id?'selected':''}}>{{$category->name}}</option>
            @endforeach 
        </select>
        <label for="description" class="text-xl font-bold tracking-wider mb-2">Treść Zadania</label>
        <textarea id="description"class="block bg-slate-50 shadow-md border border-slate-100 resize-none w-full h-48 text-lg mb-6 p-2" oninput="updatePreview()" name="description">{{$task->description}}</textarea>
        <div class="mb-8 text-xl" id="live-preview"></div>
        <div class="flex justify-between items-center">
            <a class="btn flex items-center gap-2" href="{{route('sheet.show',['sheet'=>$sheet->id])}}"><i class="fa-solid fa-arrow-left"></i>Powrót do arkusza</a>
            <button class="btn block">Zapisz <i class="fa-solid fa-check  text-2xl"></i></button>
        </div>
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
  window.addEventListener('load',updatePreview);

</script>