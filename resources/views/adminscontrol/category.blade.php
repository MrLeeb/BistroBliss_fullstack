
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>


</body>
</html> 

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<div class=" list-group w-16 gap-4 activator  ">
<a class="list-group-item activee " href="/adcategory/add">add</a>
<a class="list-group-item activee " href="/adcategory/edit">edit</a>
<a class="list-group-item activee" href="/adcategory/remove">remove</a> 

</div>


<!-- <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    The current button
  </button>
  <button type="button" class="">A second item</button>
  <button type="button" class="list-group-item list-group-item-action">A third button item</button>
  <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
  <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
</div> -->

<script>
    const container = document.querySelector('.activator');
const links = container.querySelectorAll('.activee');

links.forEach(link => {
  link.addEventListener('click', () => {
    // links.forEach(
    //     link => link.classList.remove('active')
    //     );
    link.classList.add('active');
  });
});
</script>