<x-layout title='jobs'>


    <div class="h-40 p-3 w-full flex justify-center items-center text-3xl" style="background: url('img/gradient.jpg')">
    
        <x-heading class="text-white">Jobs</x-heading>
    
    </div>

    <div class="p-4 container mx-auto">

        <x-btn-link class="bg-blue-500" href="jobs/create">Add Job</x-btn-link>

        @if (session()->get('flash'))

            <x-alert :class="session()->get('color')" >{{ session()->get('flash-message') }}</x-alert>
            
        @endif

        <ul class="flex flex-col gap-2 text-lg w-full">

            @foreach( $vacancies as $job )

                <x-vacancy.listing :job="$job"></x-vacancy>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   