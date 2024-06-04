@props(['message'])

<li class="flex flex-col w-full border-b pb-3">
  
    <div class="flex justify-between w-full">
        <a href="/messages/{{ $message->id }}" {{ $attributes->merge(['class' => "text-xl font-semibold flex  " . ($message->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $message->title }}
        </a> 
        <div {{ $attributes->merge(['class' => "text-base font-semibold flex  " . ($message->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $message->expiry_date }}
        </div> 
        
    </div>  
    <div class="flex gap-x-3">
        <div class="font-light text-base"> {{ $message->salary }}</div>
        <div class="font-light text-base"> {{ $message->company }}</div>
        <div class="font-light text-base"> {{ $message->location }}</div>
        <div class="font-light text-base"> {{ $message->id }}</div>
    </div>   
</li>

