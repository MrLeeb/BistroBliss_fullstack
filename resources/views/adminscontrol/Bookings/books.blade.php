<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-3">
    @foreach ($bookings as $booking)
<div class="flex items-center justify-content-around w-80 border-double border-4 border-primary h-20">
<h1>{{$booking->date}}</h1>
<h1>{{$booking->time}}</h1>
<h1>{{$booking->name}}</h1>
<h1>{{$booking->phone}}</h1>
<h1>{{$booking->persons}}</h1>
<h1 class="bg-warning w-12 h-12">{{$booking->status}}</h1>

<div class="flex justify-content-end gap-4 ">
<form action="bookhandleresponse" method="POST">
@csrf
<input type="hidden" name="b" value="{{ $booking->id }}">
<input type="hidden" name="res" value="acc">
<button class="bg-success w-16 h-16 text-white">Accept</button>
</form>
<form action="bookhandleresponse" method="POST">
@csrf
<input type="hidden" name="b" value="{{ $booking->id }}">
<input type="hidden" name="res" value="rej">
<button class="bg-danger w-16 h-16 text-white">Reject</button>
</form>

</div>
</div>
@endforeach
</div>     
</x-app-layout>   

       

            


</body>
</html>