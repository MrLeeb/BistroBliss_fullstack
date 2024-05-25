@include('adminscontrol.menu')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex justify-content-center align-items-center" method="POST" action="{{ route('admenu.destroy', 'categorydeleted')}}">
        @csrf

        <select name="categorydeleted">
            @foreach ($items as $item)
            <option value="{{$item->id}}" > {{$item->title}}</option>
            @endforeach
        </select>
        <button class="ms-4" type="submit">
            {{ __('Delete') }}
        </button>
        @method('delete')
    </form>
    
</body>

</html>