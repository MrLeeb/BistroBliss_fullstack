@include('adminscontrol.category')

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
            
    <form method="POST" class="flex flex-col gap-4 absolute right-96  w-[40%] justify-content-center align-items-center mt-10" action="{{ route('adcategory.store') }}">
        @csrf

        <span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Category Name:</label>
        <input name="category" class="w-64 rounded-lg" type="text">
</span>

        <!-- Name -->
        <span class=" flex w-full justify-between gap-4">
        <label class="flex items-center">Category Icon:</label>
        <input class="w-64 rounded-lg block mt-1" type="url" name="itemImage">
</span> 




        <div class="flex items-center justify-center mt-4">
            
        <button class="ms-64 w-32 h-12 text-white bg-slate-500" type="submit">
            {{ __('Add') }}
        </button>
        </div>
    </form>

            </div>