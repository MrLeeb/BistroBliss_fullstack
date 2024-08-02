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
@include('adminscontrol.blogs') 
    <form class="flex flex-col gap-4 absolute right-96  w-[700px] justify-content-center align-items-center mt-10" method="POST" action="{{ route('adblogs.store'  )}}" enctype="multipart/form-data">
       
    @csrf
       
        <span class=" flex w-full justify-between gap-4">
        <label>Blog Title:</label>
        <input name="blogtitle" class="w-64 rounded-lg" type="text">
</span>
        <span class=" flex w-full justify-between gap-4">
        <label>Date:</label>
        <input class="w-64 rounded-lg" name="blogdate" type="date">
        </span>
        <span class=" flex w-full justify-between gap-4">
        <label>Images top:</label>
        <input class="w-64" type="file"  name="blogImageTop">
        </span>
        <span>
        <label>Blog:</label>
        <textarea class="w-full rounded-lg" id="blog"  name="blogcontent"></textarea>
        </span>
        <span class="flex w-full justify-between gap-4">
        <label>Images Bottom:</label>
        <input class="w-64" type="file"  name="blogImageBottom">
        </span>

</span>
<span class="flex justify-center">
        <button class="ms-4 bg-gray-200 border-solid border border-black w-20 ml-64" type="submit">
            {{ __('Add') }}
        </button>
        </span>
        
        <img alt='f' src={"http://localhost:8000/storage/images/pexels-igor-ovsyannykov-205961.png"}></img>
    </form>
    <!-- </div> -->
</body>
<script type="text/javascript">
    $(document).ready(function() {

$('#blog').on('input', function() {

    if ($(document).height() > $(window).height()) {
        console.log("need to expand");
        $('#dashb').css("height", (this.scrollHeight+313) + 'px')     
    }

this.style.height = 'auto';
this.style.height = (this.scrollHeight+2) + 'px';

});
});
</script>

</html>