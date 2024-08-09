@include('adminscontrol.menu')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex flex-col gap-4 absolute right-96  w-[40%] justify-content-center align-items-center mt-10" method="POST" action="{{ route('admenu.destroy', 'categorydeleted')}}">
        @csrf

        <select name="categorydeleted">
            @foreach ($items as $item)
            <option value="{{$item->id}}" > {{$item->title}}</option>
            @endforeach
        </select>
        <button class="ms-64 w-32 h-12 text-white bg-slate-500" type="submit">
            {{ __('Delete') }}
        </button>
        @method('delete')
    </form>
    
</body>

</html>