@extends('layouts.app')




@section('content')
<div class="container mx-auto py-16 max-w-2xl">
    <h1 class="text-4xl text-center font-bold mb-6">Zadanie {{$task->task_nr}}</h1>
    <h3 class="text-2xl font-bold mb-6">Arkusz {{$sheet->year}} {{$sheet->month}} {{$sheet->type}}</h3>
    <p class="" id="task_description">{{$task->description}}</p>
</div>


<script>
    function renderMath(){
        const taskDescriptionElement = document.getElementById('task_description')

        const renderedExpression = taskDescriptionElement.textContent.replace('<bold>','<span class="font-bold">').replace('</bold>','</span>').replace('</br>','<br>')
        taskDescriptionElement.innerHTML = `${renderedExpression}`;

        MathJax.Hub.Queue(['Typeset', MathJax.Hub, 'taskDescriptionElement']);
    }
    window.addEventListener('load',renderMath);

</script>
@endsection