@include('adminscontrol.menu')

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
           
    <form class="flex flex-col gap-4 absolute right-96  w-[40%] justify-content-center align-items-center mt-10" method="POST" action="{{ route('admenu.store') }}">
        @csrf

        <span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Name:</label>
        <input name="itemName" class="w-64 rounded-lg" type="text">
</span>
<span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Price:</label>
        <input class="w-64 rounded-lg block mt-1" type="number" step="0.01" name="itemPrice">
</span>
<span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Image:</label>
        <input class="w-64 rounded-lg block mt-1" type="url" name="itemImage">
</span>
<span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Description:</label>
        <input class="w-full rounded-lg block mt-1" type="text" name="itemDescription">
</span>
<span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Category:</label>
        <select name="itemCategory">
            @foreach ($categories as $category)
            <option value="{{$category->id}}" > {{$category->name}}</option>
            @endforeach
        </select>
</span>


        <!-- Name -->



        <div class="flex items-center justify-center mt-4">
            
        <span class="flex justify-center">
        <button class="ms-62 w-32 h-12 text-white bg-slate-500" type="submit">
            {{ __('Add') }}
        </button>
        </span>
            
        </div>
    </form>

            </div>