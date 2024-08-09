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


<div class=" flex flex-col justify-content-around w-26 h-[84.5%] activator gap-12 w-80 z-10 absolute bg-slate-200">
  <h2 class="font-semibold text-lg text-center mt-2 mr-2">Item:</h2>
  <div class=" flex flex-col justify-content-around list-group  gap-4 activator mb-52   ">
<a class="list-group-item w-full h-12 activee text-white bg-slate-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 hover:text-white focus:outline-none dark:focus:ring-blue-800 " href="/admenu/add">add</a>
<a class="list-group-item w-full h-12 activee text-white bg-slate-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 hover:text-white focus:outline-none dark:focus:ring-blue-800" href="/admenu/edit">edit</a>
<a class="list-group-item w-full h-12 activee text-white bg-slate-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 hover:text-white focus:outline-none dark:focus:ring-blue-800" href="/admenu/remove">remove</a> 
</div>
</div>




