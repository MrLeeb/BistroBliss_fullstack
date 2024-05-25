@include('adminscontrol.menu')

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <x-guest-layout>
    <form method="POST" action="{{ route('admenu.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="item" :value="__('Name')" />
            <x-text-input  class="block mt-1 w-full" type="text" name="itemName"/>
            <x-input-label for="item" :value="__('Price')" />
            <x-text-input  class="block mt-1 w-full" type="number" step="0.01" name="itemPrice"/>
            <x-input-label for="item" :value="__('Image')" />
            <x-text-input  class="block mt-1 w-full" type="url" name="itemImage"/>
            <x-input-label for="item" :value="__('Description')" />
            <x-text-input  class="block mt-1 w-full" type="text" name="itemDescription"/>
            <x-input-label for="item" :value="__('Category')" />
            <select name="itemCategory">
            @foreach ($categories as $category)
            <option value="{{$category->id}}" > {{$category->name}}</option>
            @endforeach
        </select>

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ms-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
            </div>