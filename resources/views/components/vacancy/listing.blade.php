@props(['job'])

<li class="flex flex-col w-full border-b pb-3">
  
    <div class="flex justify-between w-full">
        <div {{ $attributes->merge(['class' => "text-xl font-semibold flex  " . ($job->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $job->title }}
        </div> 
        <div {{ $attributes->merge(['class' => "text-base font-semibold flex  " . ($job->salary > 30000 ? 'text-emerald-500' : 'text-red-600')]) }}>
            {{ $job->expiry_date }}
        </div> 
        
    </div>  
    <div class="flex gap-x-3">
        <div class="font-light text-base"> {{ $job->salary }}</div>
        <div class="font-light text-base"> {{ $job->company }}</div>
        <div class="font-light text-base"> {{ $job->location }}</div>
        <div class="font-light text-base"> {{ $job->id }}</div>
    </div>   
</li>

