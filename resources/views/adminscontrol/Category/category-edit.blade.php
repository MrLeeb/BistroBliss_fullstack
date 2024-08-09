
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<!-- <div class="flex "> -->

<body>

@include('adminscontrol.category') 
    <form class="flex flex-col gap-4 absolute right-96  w-[40%] justify-content-center align-items-center mt-10" method="POST" action="{{ route('adcategory.edit','newcategory','categoryedited'  )}}">
       
    @csrf
        <select class="" id="editedcategory" name="categoryedited" >
        @foreach ($categories as $category)
            <option value="{{$category->id}}" data-name="{{ $category->name }}" > {{$category->name}}</option>
            
            @endforeach
        </select>
        <span class=" flex w-96 justify-between gap-4">
        <label class="flex items-center">New Category Name:</label>
        <input id="newname" name="newcategory" type="text" value="">
</span>
        <button class="ms-64 w-32 h-12 text-white bg-slate-500 " type="submit">
            {{ __('Update') }}
        </button>

        <script>
  $(function() {

    $("#editedcategory").change(function() {
        var name = $(this).find(':selected').data('name');
        $("#newname").val(name);
    });
    var name = $(this).find(':selected').data('name');
        $("#newname").val(name);
  }
  
  );
</script>
        
    </form>
    <!-- </div> -->
</body>

</html>