@props(['vacancy'])

<li class="flex flex-col w-full pb-3">

    <div class="flex w-full justify-between py-2">
        <h1  {{ $attributes->merge(['class' => "text-xl font-semibold flex  " . ($vacancy->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $vacancy->title }}
        </h1>
        <h1 {{ $attributes->merge(['class' => "text-base font-semibold flex  " . ($vacancy->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $vacancy->expiry_date }}
        </h1> 
    </div>
   
    <div class="font-light"> {{ $vacancy->salary }}</div>
    <div class="font-light"> {{ $vacancy->company }}</div>
    <div class="font-light"> {{ $vacancy->location }} + {{ $vacancy->id }}</div>
    <form method="POST" action="/jobs/delete/{{ $vacancy->id }}">
        @csrf
        @method('DELETE')
        <x-btn type="submit" class="bg-red-500">Delete</x-btn>
        <x-btn type="button" form="edit-form" class="bg-blue-500">Edit</x-btn>
    </form>
   

</li>

