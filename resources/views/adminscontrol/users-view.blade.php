
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>


</body>
</html> 

<x-app-layout>
<!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
        </h2>
    </x-slot> -->
    <div class="flex flex-col gap-2 ml-64 mt-8">
<li class=" flex justify-evenly">
    <h3 class="w-[24%]">Id:</h3>
    <h3 class="w-[24%]">Name:</h3>
    <h3 class="w-[24%]">Email:</h3>
    <h3 class="w-[24%]">Admin:</h3>
</li>
@foreach( $users as $user)

<!-- <li>{{$user}}</li> -->
<li class=" flex justify-evenly ">
    <p class="w-[24%]">{{$user->id}}</p>
    <p class="w-[24%]">{{$user->name}}</p>
    <p class="w-[24%]">{{$user->email}}</p>
    <p class="w-[24%]">{{$user->IsAdmin}}</p>
</li>
@endforeach
</div>
    
</x-app-layout>



