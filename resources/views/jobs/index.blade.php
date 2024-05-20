<x-layout title='jobs'>


    <div class="h-40  p-3 w-full" style="background: url('img/gradient.jpg')">
    
        <x-heading class="text-white">Jobs</x-heading>
    
    
    </div>


    <div class="p-4">

        <ul class="flex flex-col gap-2 text-lg p-2 w-full">

            @foreach( $vacancies as $job )

                <x-vacancy.listing :job="$job"></x-vacancy>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   