@include('adminscontrol.category')

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
            <x-guest-layout>
    <form method="POST" action="{{ route('adcategory.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="category" :value="__('Category Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="category"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

<div>
<x-input-label for="category" :value="__('Icon')" />
<input name="caticon" type="text">
</div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ms-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
            </div>