
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
    <form class="flex flex-col gap-4 absolute right-96  w-[700px] justify-content-center align-items-center mt-10" method="POST" action="{{ route('adblogs.edit','newblog','blogedited'  )}}" enctype="multipart/form-data">
       
    @csrf
    <span class=" flex w-96 justify-between gap-4">
     <label>Choose Blog to Edit:</label>
        <select class="" id="editedblog" name="blogedited" >     
        @foreach ($blogs as $blog)
            <option value="{{$blog->id}}" data-name="{{ $blog->title }}" data-content="{{ $blog->content }}" data-imaget="{{ $blog->imagetop }}" data-imageb="{{ $blog->imagebottom }}"> {{$blog->title}}</option>
            
            @endforeach
        </select>
    </span>
        <span class=" flex w-96 justify-between gap-4">
        <label>New blog Title:</label>
        <input id="newname" name="newblogtitle" type="text" value="">
</span>
        <span class=" flex w-96 justify-between gap-4">
        <label>New blog Date:</label>
        <input id="newdate" name="newblogdate" type="date" value="">
</span>
        <span class=" flex w-96 justify-between gap-4">
        <label>New blog Content:</label>
        
</span>
<textarea class="w-full rounded-lg" id="newblog" name="newblog" type="text" value=""></textarea>
        <span class=" flex w-96 justify-between gap-4">
        <label>New blog top Image:</label>
        <input id="newblogimagetop" name="newblogimaget" type="file" value="">
        
</span>
<img id="imagetop">

        <span class=" flex w-96 justify-between gap-4">
        <label>New blog Bottom Image:</label>
        <input id="newblogimagebottom" name="newblogimageb" type="file" value="">
</span>
<img id="imagebottom">
        <button class="ms-4" type="submit">
            {{ __('Update') }}
        </button>

        <script>
  $(function() {

    $("#editedblog").change(function() {
        
        var name = $(this).find(':selected').data('name');
        var content = $(this).find(':selected').data('content');
        var imaget = $(this).find(':selected').data('imaget');
        var imageb = $(this).find(':selected').data('imageb');

        var imaget = $(this).find(':selected').data('imaget');
        var imt= "http://localhost:8000/storage/images/"+imaget;
        var imageb = $(this).find(':selected').data('imageb');
        var imb= "http://localhost:8000/storage/images/"+imageb;

        $("#newname").val(name);
        $("#newblog").val(content);
        // $("#newblogimagetop").val(imaget);
        // $("#newblogimagebottom").val(imageb);

        $("#imagetop").attr('src',imt);
        $("#imagebottom").attr('src',imb);
        $("#newblog")[0].style.height = ($("#newblog")[0].scrollHeight+2) + 'px';
    });
    var name = $(this).find(':selected').data('name');
    var content = $(this).find(':selected').data('content');
    var imaget = $(this).find(':selected').data('imaget');
    var imageb = $(this).find(':selected').data('imageb');
    var imt= "http://localhost:8000/storage/images/"+imaget;
    //http://localhost:8000/storage/images/"+el.imagetop
        $("#newname").val(name);
        $("#newblog").val(content);
        // $("#newblogimagetop").val(imaget);
        // $("#newblogimagebottom").val(imageb);
        $("#imagetop").attr('src',imt);
  }
  );
$('#newblogimagetop').change(function(e){

    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        $("#imagetop").attr("src", e.target.result);
    }

    reader.readAsDataURL(file);

    

});

$('#newblog').on('input', function() {
if ($(document).height() > $(window).height()) {
    $('#dashb').css("height", (this.scrollHeight+313) + 'px')     
}
this.style.height = 'auto';
this.style.height = (this.scrollHeight+2) + 'px';

});
// $('#newblogimagetop').ready(function(){

// })
</script>
        
    </form>
    <!-- </div> -->
</body>

</html>