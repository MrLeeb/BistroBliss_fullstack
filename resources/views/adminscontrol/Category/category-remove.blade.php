@include('adminscontrol.category')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex flex-col gap-8 justify-center absolute right-[40%] align-items-center mt-10" method="POST" action="{{ route('adcategory.destroy', 'categorydeleted')}}">
        @csrf
<span>
    <label>Choose Category to delete:</label>
        <select name="categorydeleted">
            @foreach ($categories as $category)
            <option value="{{$category->id}}" > {{$category->name}}</option>
            @endforeach
        </select>
    </span>
        <button class="ms-64 w-32 h-12 text-white bg-slate-500" type="submit">
            {{ __('Delete') }}
        </button>
        @method('delete')
    </form>
    
</body>

</html>