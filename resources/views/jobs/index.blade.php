<x-layout title='jobs'>

    <div class="p-4">
    
        <x-heading>Jobs</x-heading>

        <ul class="flex flex-col gap-2 text-lg p-2 w-full">

            @foreach( $vacancies as $job )

                <x-vacancy.listing :job="$job"></x-vacancy>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   