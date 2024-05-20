@props(['vacancy'])

<li class="flex flex-col w-full pb-3">
  
    <div {{ $attributes->merge(['class' => "text-xl font-semibold flex  " . ($vacancy->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
        {{ $vacancy->title }}
    </div> 
    <div class="font-light text-base"> {{ $vacancy->salary }}</div>
    <div class="font-light text-base"> {{ $vacancy->company }}</div>
    <div class="font-light text-base"> {{ $vacancy->location }}</div>
    <div {{ $attributes->merge(['class' => "text-base font-semibold flex  " . ($vacancy->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
        {{ $vacancy->expiry_date }}
    </div> 

</li>

