<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Hello! Admin here</h1>
</body>
</html> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
        </h2>
    </x-slot>

    
</x-app-layout>


<div class=" flex flex-col justify-content-around w-20 h-96 gap-4 activator mb-28 ml-4 absolute">
  <h2 class="font-semibold text-lg text-center">Item:</h2>
  <div class=" list-group w-20 gap-4 activator  ">
<a class="list-group-item activee " href="/admenu/add">add</a>
<a class="list-group-item activee " href="/admenu/edit">edit</a>
<a class="list-group-item activee" href="/admenu/remove">remove</a> 
</div>
</div>