@include('adminscontrol.menu')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <form class="flex flex-col gap-4 absolute right-96  w-[40%] justify-content-center align-items-center mt-10" method="POST" action="{{ route('admenu.edit', 'itemedited', 'itemname','itemprice','itemdescription','itemimage','itemcategory')}}">
        @csrf   

        <select id="editeditem" name="itemedited" >
           @foreach ( $items as $item)
            <option value="{{$item->id}}" data-name="{{$item->title}}" data-price="{{$item->price}}" data-description="{{$item->description}}" data-image="{{$item->image}}" data-category="{{$item->category}}"> {{$item->title}}</option>
           @endforeach
        </select>
        <span class="flex w-96 justify-between gap-4">
<label class="flex items-center">New Item Name:</label>
<input name="itemname" id="newname" type="text">
</span>
<span class="flex w-96 justify-between gap-4">
<label class="flex items-center">New Item Price:</label>
<input name="itemprice" id="newprice" type="number" step="0.01">
</span>
<span class=" flex w-96 justify-between gap-4">
<label class="flex items-center">New Item description:</label>
<input name="itemdescription" id="newdescription" type="text">
</span>
<span class="flex w-96 justify-between gap-4">
<label class="flex items-center">New Item Image:</label>
<input name="itemimage" id="newimage" type="text">
</span>
<span class="flex w-96 justify-between gap-4">
<label class="flex items-center">New Item Category:</label>
        <select name="itemcategory" id="newcategory">
@foreach($categories as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
        </select>
</span>
        <button class="ms-64 w-32 h-12 text-white bg-slate-500" type="submit">
            {{ __('Update') }}
        </button>
        
        <script>
  $(function() {
    $("#editeditem").change(function() {
        var name = $(this).find(':selected').data('name');
        var price = $(this).find(':selected').data('price');
        var desc = $(this).find(':selected').data('description');
        var img = $(this).find(':selected').data('image');
        var cat = $(this).find(':selected').data('category');
        $("#newprice").val(price);
        $("#newdescription").val(desc);
        $("#newname").val(name);
        $("#newimage").val(img);
        $("#newcategory").val(cat);
    });
var name = $(this).find(':selected').data('name');
        var price = $(this).find(':selected').data('price');
        var desc = $(this).find(':selected').data('description');
        var img = $(this).find(':selected').data('image');
        var cat = $(this).find(':selected').data('category');
        $("#newprice").val(price);
        $("#newdescription").val(desc);
        $("#newname").val(name);
        $("#newimage").val(img);
        $("#newcategory").val(cat);
  });
</script>

    </form>
    
</body>

</html>