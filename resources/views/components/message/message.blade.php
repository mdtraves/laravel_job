@props(['message'])

<li class="flex flex-col w-full pb-3">

    <div {{ $attributes->merge(['class' => "text-xl font-semibold flex  " . ($message->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
        {{ $message->title }}
    </div> 
    <div class="font-light text-base"> {{ $message->salary }}</div>
    <div class="font-light text-base"> {{ $message->company }}</div>
    <div class="font-light text-base"> {{ $message->location }} + {{ $message->id }}</div>
    <div {{ $attributes->merge(['class' => "text-base font-semibold flex  " . ($message->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
        {{ $message->expiry_date }}
    </div> 
    <form method="POST" action="/messages/delete/{{ $message->id }}">
        @csrf
        @method('DELETE')
        <x-btn type="submit" class="bg-red-500">Delete</x-btn>
        <x-btn-link href="/messages/edit/{{ $message->id }}"  class="bg-blue-500">Edit</x-link>
    </form>
   
</li>

