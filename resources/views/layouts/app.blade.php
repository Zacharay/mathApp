<!DOCTYPE html>
<html lang="pl">
<head>   
    <meta charset="UTF-8"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/mml-chtml.js">
    </script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
            @apply bg-blue-500 text-2xl text-white tracking-wider font-bold uppercase px-6 py-3 rounded-3xl cursor-pointer hover:bg-blue-400 transition-all;
        }
        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500;
        }
        label{
            @apply block
        }
        .error{
            @apply text-red-500 text-sm;
        }
        .input-error{
            @apply border border-red-500;
        }
    </style>
    {{-- blade-formatter-enable --}}
    <title>Math app</title>
</head>
<body>
    <div >@yield('content')</div>
</body>
</html>