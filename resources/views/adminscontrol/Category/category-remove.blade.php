@include('adminscontrol.category')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex justify-content-center absolute right-2/4 align-items-center mt-10" method="POST" action="{{ route('adcategory.destroy', 'categorydeleted')}}">
        @csrf

        <select name="categorydeleted">
            @foreach ($categories as $category)
            <option value="{{$category->id}}" > {{$category->name}}</option>
            @endforeach
        </select>
        <button class="ms-4" type="submit">
            {{ __('Delete') }}
        </button>
        @method('delete')
    </form>
    
</body>

</html>