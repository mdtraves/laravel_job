<x-layout title='jobs'>


    <div class="h-40 p-3 w-full flex justify-center items-center text-3xl" style="background: url('img/gradient.jpg')">
    
        <x-heading class="text-white">Jobs</x-heading>
    
    
    </div>


    <div class="p-4">

        @if (session()->get('title'))

            <x-alert class="bg-red-500" >Job: {{ session()->get('title') }} - deleted</x-alert>
            
        @endif

        <ul class="flex flex-col gap-2 text-lg p-2 w-full container mx-auto">

            @foreach( $vacancies as $job )

                <x-vacancy.listing :job="$job"></x-vacancy>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   