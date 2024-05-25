@include('adminscontrol.category')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex justify-content-center align-items-center" method="POST" action="{{ route('adcategory.destroy', 'categorydeleted')}}">
        @csrf

        <select name="categorydeleted">
           
            <option value="{{$category->id}}" > {{$category->name}}</option>
           
        </select>
        <button class="ms-4" type="submit">
            {{ __('Delete') }}
        </button>
        @method('delete')
        
    </form>
    
</body>

</html>