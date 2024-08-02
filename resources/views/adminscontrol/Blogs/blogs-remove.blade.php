
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
@include('adminscontrol.blogs') 

@if($errors->any())
<div class="alert alert-danger bg-[#DC4C64] ">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>  
    @endforeach
  </ul>
</div>
@endif

@if(session('success'))
  <div class="alert alert-success bg-[#14A44D]">
    {{ session('success') }}
  </div>
@endif
    <form class="flex flex-col gap-4 absolute right-2/4 translate-x-full w-48 justify-content-center align-items-center mt-10" method="POST" action="{{ route('adblogs.destroy','newblog','blogedited'  )}}" enctype="multipart/form-data">
       
    @csrf
    <span class=" flex w-96 justify-between gap-4">
     <label>Choose Blog to Delete:</label>
        <select class="w-[53%]" id="editedblog" name="blogedited" >     
        @foreach ($blogs as $blog)
            <option value="{{$blog->id}}" data-name="{{ $blog->title }}" data-date="{{ $blog->date }}" data-content="{{ $blog->content }}" data-imaget="{{ $blog->imagetop }}" data-imageb="{{ $blog->imagebottom }}"> {{$blog->title}}</option>
            
            @endforeach
        </select>
    </span>
        <span class=" flex w-96 justify-between gap-4">
        <label>Blog Title:</label>
        <p id="bdeltitle"></p>
</span>
        <span class=" flex w-96 justify-between gap-4">
        <label>Blog Date:</label>
        <p id="bdeldate"></p>
</span>
        <span class=" flex w-96 justify-between gap-4">
        <label>Blog Content:</label>
        <p id="bdelcontent"></p>
</span>
        <span class=" flex w-96 justify-between gap-4">
        <label>Blog top Image:</label>
</span>
<img id="imagetop">

        <span class=" flex w-96 justify-between gap-4">
        <label id="bimgblabel"></label>    
</span>
<img id="imagebottom">

        <button class="ms-4" type="submit">
            {{ __('Delete') }}
        </button>

        <script>
  $(function() {

    $("#editedblog").change(function() {
        var name = $(this).find(':selected').data('name');
        var date = $(this).find(':selected').data('date');
        var content = $(this).find(':selected').data('content');
        var imaget = $(this).find(':selected').data('imaget');
        var imageb = $(this).find(':selected').data('imageb');
console.log($("#bdelcontent"));
        var imaget = $(this).find(':selected').data('imaget');
        var imt= "http://localhost:8000/storage/images/"+imaget;
        var imageb = $(this).find(':selected').data('imageb');
        var imb= "http://localhost:8000/storage/images/"+imageb;

        $("#bdeltitle").text(name);
        $("#bdeldate").text(date);
        $("#bdelcontent").html(content);
        // $("#newname").val(name);
        // $("#newblog").val(content);
        // $("#newblogimagetop").val(imaget);
        // $("#newblogimagebottom").val(imageb);
// console.log(imageb);
        $("#imagetop").attr('src',imt);
        $("#imagebottom").attr('src',imb);
        var bimgcheck =$("#imagebottom").attr("src");
        if(bimgcheck && $("#imagebottom").attr("src")!= "http://localhost:8000/storage/images/"){
            console.log(bimgcheck)
            console.log("Valid")
$("#bimgblabel").text("Blog Bottom Image:");
        }
        else{
            console.log("InValid")

            $("#bimgblabel").text("");
        }
    });
    var name = $(this).find(':selected').data('name');
    var date = $(this).find(':selected').data('date');
    var content = $(this).find(':selected').data('content');
    var imaget = $(this).find(':selected').data('imaget');
    var imageb = $(this).find(':selected').data('imageb');
    var imt= "http://localhost:8000/storage/images/"+imaget;

    //http://localhost:8000/storage/images/"+el.imagetop
        $("#bdeltitle").text(name);
        $("#bdeldate").text(date);
        $("#bdelcontent").html(content);
        // $("#newblogimagetop").val(imaget);
        // $("#newblogimagebottom").val(imageb);
        $("#imagetop").attr('src',imt);
        var bimgcheck =$("#imagebottom").attr("src");
        if(bimgcheck){
$("#bimgblabel").text("Blog Bottom Image:");
        }
        else{
            $("#bimgblabel").text("");
        }
  }
  );

// $('#newblogimagetop').ready(function(){

// })
</script>
@method('delete')
    </form>
    <!-- </div> -->
</body>

</html>